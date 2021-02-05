# A custom array sort bang method (by monkey patch) 
# ref for the bubble sort by Julie Kent
# https://www.honeybadger.io/blog/ruby-bubble-sort/

class Array

  # Custom sort bang method
  # @example
  # arr.sort!
  def sort!
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
  end

end # end Array

# Let's try it
arr = [3, 2, 5, 6, 8, 9, 1, 4]
p arr.class

arr.sort!
p arr
