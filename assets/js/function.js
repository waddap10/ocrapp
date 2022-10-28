var titlepage = document.title;
if (titlepage == "Dashboard") {
  document.getElementById("sb-db").classList.add('active');
} else {
  document.getElementById("sb-ld").classList.add('active');
}