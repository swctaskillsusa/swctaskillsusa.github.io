document.addEventListener("DOMContentLoaded", function() {
				    var elements = document.getElementsByTagName("INPUT");
				    for (var i = 0; i < elements.length; i++) {
				        elements[i].oninvalid = function(e) {
				            e.target.setCustomValidity("");
				            if (!e.target.validity.valid) {
				                e.target.setCustomValidity("Please fillout the required field.");
				            }
				        };
				        elements[i].oninput = function(e) {
				            e.target.setCustomValidity("Grade" + "Shirt Size" + "Program Area" + "Sex" + "Jacket" + "Skills Competition" + "Leadership Competition" + "");
				        };
   					}
				})