var col = document.getElementsByClassName("collapsable");
		var i;
		for (i = 0; i < col.length; i++) {
			col[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var isi = this.nextElementSibling;
				if (isi.style.display === "block") {
					isi.style.display = "none";
				} else {
					isi.style.display = "block";
				}
			});

		}