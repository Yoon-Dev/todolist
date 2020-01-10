var CACHE_NAME = 'cache';
var urlsToCache = [
  './favicon/apple-touch-icon.png',
  './favicon/favicon-32x32.png',
  './favicon/favicon-16x16.png',
  './favicon/site.webmanifest',
  './favicon/safari-pinned-tab.svg',
  'https://media.giphy.com/media/l46CD836UtIyQO00g/source.gif',
  './view/offline.php',
  './view/header-offline.php',
  './bootstrap/css/bootstrap.css',
  './css/form.css',
  './css/extension.css',
  './css/add-btn.css',
  './css/animation.css',
  './css/loader.css',
  'https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css',
  './script/plugin/jquery/jquery-3.4.0.js',
  'https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js',
  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
  './script/front/route.js',
  './script/front/filterTask.js',
  './script/front/edit.js',
  './script/front/edit_repe.js',
  './script/front/add_repe.js',
  './script/front/o-grocery.js',
  './script/front/search.js',
  './script/front/search-area.js',
  './script/front/detail-task.js',
  './script/front/burger.js',
  './script/front/header.js',
  './script/back/b-del.js',
  './script/back/b-edit.js',
  './script/back/b-add.js',
  './script/back/b-add_repe.js',
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        return cache.addAll(urlsToCache);
      })
  );
  self.skipWaiting()
});

self.addEventListener('activate', function(evt){
  evt.waitUntil(
    caches.keys().then((keyList) => {
      return Promise.all(keyList.map((key) => {
        if (key !== CACHE_NAME) {
          // remove old cache
          return caches.delete(key);
        }
      }));
    })
  );
  self.clients.claim()
});

self.addEventListener('fetch', (evt) =>{
  // CODELAB: Add fetch event handler here.
  if (evt.request.mode !== 'navigate') {
    // Not a page navigation, bail.
    return;
  }
  evt.respondWith(
      fetch(evt.request)
          .catch(() => {
            return caches.open(CACHE_NAME)
                .then((cache) => {
                  return cache.match('./view/offline.php');
                });
          })
  );
});
