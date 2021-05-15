/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/algolia.js ***!
  \*********************************/
function algoliaStart() {
  console.log('en Algolia');
  var searchClient = algoliasearch('0T3LSPE6Y3', 'adc40809a173f0b32be0abeffd403774');
  var search = instantsearch({
    indexName: 'experts',
    searchClient: searchClient
  });
  search.addWidgets([instantsearch.widgets.searchBox({
    container: '#searchbox'
  }), instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: "\n        <h2>{{nombre}}</h2>\n        <p>{{especialidad}}</p>\n        "
    }
  })]);
  search.start();
}

window.algoliaStart = algoliaStart;
/******/ })()
;