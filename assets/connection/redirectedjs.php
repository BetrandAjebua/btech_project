<script>
let lo = document.querySelectorAll('.nav-link');
console.log(lo);
lo.forEach(element => {
  !element.addEventListener("click",()=>{
    window.location.href="../index.php"
  });
});
  </script>