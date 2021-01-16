const bubbleSort = (array, cmp) => {
  const comparator = (a, b) => a - b;
  cmp = cmp || comparator;
  var temp;
  for (var i = 0; i < array.length - 1; i += 1) {
    var swapCount = 0;
    for (var j = 0; j < array.length - 1 - i; j += 1) {
      if (cmp(array[j], array[j + 1]) > 0) {
        temp = array[j];
        array[j] = array[j + 1];
        array[j + 1] = temp;
        swapCount += 1;
      }
    }
    if (swapCount === 0) {
      break;
    }
  }
  return array;
};

console.log(bubbleSort(["2", "1"]));
