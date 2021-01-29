const selectionSort = (array, cmp) => {
  const compare = (a, b) => {
    return a - b;
  };
  cmp = cmp || compare;
  let idx;
  let temp;
  for (let i = 0; i < array.length - 1; i += 1) {
    idx = i;
    for (let j = i + 1; j < array.length; j += 1) {
      if (cmp(array[idx], array[j]) > 0) {
        idx = j;
      }
    }
    temp = array[i];
    array[i] = array[idx];
    array[idx] = temp;
  }
  return array;
};

console.log(selectionSort([2, 3, 1]));
