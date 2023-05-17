document.addEventListener("DOMContentLoaded", function() {
    const watchlistForm = document.getElementById("watchlistForm");
    const movieTitle = document.getElementById("movieTitle");
    const watchlistItems = document.getElementById("watchlistItems");
  
    // Event listener for form submission
    watchlistForm.addEventListener("submit", function(e) {
      e.preventDefault(); // Prevent default form submission
  
      const title = movieTitle.value.trim();
      if (title !== "") {
        addMovieToWatchlist(title); // Call function to add movie to watchlist
        movieTitle.value = ""; // Clear the input field
      }
    });
  
    // Function to add movie to watchlist
    function addMovieToWatchlist(title) {
      const li = document.createElement("li");
      li.innerHTML = title + '<button class="deleteBtn">Delete</button>';
  
      // Event listener for delete button
      li.querySelector(".deleteBtn").addEventListener("click", function() {
        removeMovieFromWatchlist(li); // Call function to remove movie from watchlist
      });
  
      watchlistItems.appendChild(li);
    }
  
    // Function to remove movie from watchlist
    function removeMovieFromWatchlist(li) {
      watchlistItems.removeChild(li);
    }
  });