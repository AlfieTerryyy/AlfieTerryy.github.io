/*doc display*/
function openModal(image) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = image.src;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
/*End Doc display*/

/*Nav*/
function toggleNav() {
  const navButtons = document.querySelectorAll('hidden');
  navButtons.forEach(button => {
    if (!button.classList.contains('.nav-square-toggle')) {
      button.classList.toggle('.nav-square');
    }
  });
}
/*End Nav*/
