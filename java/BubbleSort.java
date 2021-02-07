/**
 * Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent
 * elements if they are in wrong order.
 */

public class BubbleSort {

  /**
   * @param numbers array of unordered integer
   * @return ordered array of numbers
   */
  int[] bubbleSort(int[] numbers) {
    for (int i = 0; i < numbers.length; i++) {
      for (int j = 0; j < numbers.length - i - 1; j++) {
        if (numbers[j] > numbers[j + 1]) {
          int temp = numbers[j];
          numbers[j] = numbers[j + 1];
          numbers[j + 1] = temp;
        }
      }
    }
    return numbers;
  }
}
