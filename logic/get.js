console.log(flatten([1, 'any [complex] string', null, function () {},
  [1, 2, [3, '4'], 0],
  [], {
    a: 1
  }
]));
// возвращает
//      [1, 'any [complex] string', null, function() {}, 1, 2, 3, '4', 0, { a: 1 }]

function flatten(list) {
  let result = []
  for (listItem of list) {
    if (Array.isArray(listItem)) {
      let reduced = listItem.reduce((acc, val) => acc.concat(val), [])
      for (reducedItem of reduced) {
        result.push(reducedItem)
      }
    } else {
      result.push(listItem)
    }
  }
  return result
}
