package italiancoders;

/** Quick Sort
 *
 *  Quick Sort is a sorting algorithm, which is leveraging divide and conquer principle.
 *  The input list is divided into two sub-lists by an element called pivot;
 *  one sub-list with elements less than the pivot and another one with elements greater than the pivot.
 *  This process repeats for each sub-list.
 *
 * Finally, all sorted sub-lists merge to form the final output.
 */
public class QuickSort {

    /**
     * @param arr
     * @param begin
     * @param end
     */
    public static void quickSort(int arr[], int begin, int end) {
        if (begin < end) {
            int partitionIndex = partition(arr, begin, end);

            // Recursively sort elements of the 2 sub-arrays
            quickSort(arr, begin, partitionIndex-1);
            quickSort(arr, partitionIndex+1, end);
        }
    }

    /**
     * @param arr
     * @param begin
     * @param end
     * @return
     */
    private static int partition(int arr[], int begin, int end) {
        int pivot = arr[end];
        int i = (begin-1);

        for (int j = begin; j < end; j++) {
            if (arr[j] <= pivot) {
                i++;

                int swapTemp = arr[i];
                arr[i] = arr[j];
                arr[j] = swapTemp;
            }
        }

        int swapTemp = arr[i+1];
        arr[i+1] = arr[end];
        arr[end] = swapTemp;

        return i+1;
    }
}
