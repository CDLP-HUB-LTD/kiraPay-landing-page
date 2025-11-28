const CACHE_NAME = "kirapay-v1";
const urlsToCache = [
  "/",
  "/style.css",
  "/media.css",
  "/index.js",
  "/main.js",
  "/img/kiraLogo.png",
  "/img/LogoIcon.png",
  "/img/bgImage.png",
  "/img/service.png",
  "/img/enjoyImg.png",
  "/img/enjoyBG.png",
  "/img/downloadPhone.png",
  "/img/downloadBg.png",
  "/img/downloadVector.png",
  "/img/blackmen.png",
  "/img/mtn.png",
  "/img/glo.png",
  "/img/airtel.png",
  "/img/9mobile.png",
  "/img/dstv.png",
  "/img/gotv.png",
  "/img/googlestore.svg.png",
  "/img/Link - apple app store remita page.png",
  "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",
  "https://unpkg.com/aos@next/dist/aos.css",
];

// Install event - cache resources
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      console.log("Cache opened successfully");
      return cache.addAll(urlsToCache).catch((err) => {
        console.log("Cache error:", err);
        return Promise.resolve();
      });
    }),
  );
  self.skipWaiting();
});

// Activate event - clean up old caches
self.addEventListener("activate", (event) => {
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheName !== CACHE_NAME) {
            console.log("Deleting old cache:", cacheName);
            return caches.delete(cacheName);
          }
        }),
      );
    }),
  );
  self.clients.claim();
});

// Fetch event - Network first, fallback to cache
self.addEventListener("fetch", (event) => {
  event.respondWith(
    fetch(event.request)
      .then((response) => {
        // Don't cache non-GET requests
        if (event.request.method !== "GET") {
          return response;
        }

        // Clone and cache successful responses
        const responseToCache = response.clone();
        if (response.status === 200) {
          caches.open(CACHE_NAME).then((cache) => {
            cache.put(event.request, responseToCache);
          });
        }

        return response;
      })
      .catch(() => {
        // Network failed, try cache
        return caches.match(event.request).then((response) => {
          return response || caches.match("/offline.html");
        });
      }),
  );
});
