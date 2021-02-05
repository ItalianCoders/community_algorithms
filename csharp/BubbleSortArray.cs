using System;

namespace ItalianCoders
{
    public static class Extension
    {
        /// <summary>
        /// Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent elements if they are in wrong order.
        /// </summary>
        /// <example>
        /// <code>
        /// int[] array = { 3, 1, 2 };
        /// array.Sort();
        /// </code>
        /// </example>
        public static void Sort<T>(this T[] array)
            where T : IComparable<T>
        {
            for (int i = 0; i < array.Length; i++)
            {
                for (int j = 0; j < array.Length - 1; j++)
                {
                    if (array[j].CompareTo(array[j + 1]) > 0)
                    {
                        T temp = array[j];
                        array[j] = array[j + 1];
                        array[j + 1] = temp;
                    }
                }
            }
        }

        /// <summary>
        /// Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent elements if they are in wrong order.
        /// Use the reverse parameter to reverse the order.
        /// </summary>
        /// <param name="reverse">Set it to true to reverse the order.</param>
        public static void Sort<T>(this T[] array, bool reverse = default)
            where T : IComparable<T>
        {
            array.Sort();

            if (reverse) Array.Reverse(array);
        }
    }
}
