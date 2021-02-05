# A custom array sort bang method (by monkey patch) 
# ref for the bubble sort by Julie Kent
# https://www.honeybadger.io/blog/ruby-bubble-sort/


module ItalianCoders
  module Array

    # Custom sort bang method
    # @param reverse [Bool] Set it to 'true' to reverse the array
    # @example
    # arr.bubble_sort!
    def bubble_sort!(reverse = false)
      loop do
        swapped = false

        (self.size - 1).times do |i|
          if self[i] > self[i + 1]

            swapped = true
            self[i], self[i + 1] = self[i + 1], self[i]
        
          end
        end
        break if not swapped
      end

      self.reverse! if reverse
    end

  end # end Array
end # end ItalianCoders


# Add bubble_sort! to Array
Array.include ItalianCoders::Array

# Let's try it
arr = [3, 2, 5, 6, 8, 9, 1, 4]
p Array.method_defined? :bubble_sort! # true

arr.bubble_sort!(reverse: true)
p arr # [9, 8, 6, 5, 4, 3, 2, 1]

arr.bubble_sort!
p arr # [1, 2, 3, 4, 5, 6, 8, 9]