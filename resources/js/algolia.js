function algoliaStart() {
  console.log('en Algolia')
  const searchClient = algoliasearch(
    '0T3LSPE6Y3',
    'adc40809a173f0b32be0abeffd403774'
  )

  const search = instantsearch({
    indexName: 'experts',
    searchClient,
  })

  search.addWidgets([
    instantsearch.widgets.searchBox({
      container: '#searchbox',
    }),

    instantsearch.widgets.hits({
      container: '#hits',
      templates: {
        item: `
        <h2>{{nombre}}</h2>
        <p>{{especialidad}}</p>
        `,
      },
    }),
  ])

  search.start()
}
window.algoliaStart = algoliaStart
