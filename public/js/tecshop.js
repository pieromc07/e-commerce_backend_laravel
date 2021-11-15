window.addEventListener("load", () => {


    const image_file = document.querySelector("#image_file");
    const image_container = document.querySelector("#image_container");
    const image = document.querySelector("#image");
    const supportedImages = ["image/jpeg", "image/png", "image/jpg"];
    var count = 0;
    image_file.addEventListener("change", () => {
        var files = image_file.files;
        if (files) {
            for (let i = 0; i < supportedImages.length; i++) {
                const element = supportedImages[i];
                if (element === files[0].type) {
                    const first_file = files[0];
                    const objectURL = URL.createObjectURL(first_file);
                    image.src = objectURL;
                    image_container.classList.toggle("no_image");
                    i = supportedImages.length;
                } else {
                    count += 1;
                }
            }
            if(count===3){
                alert("Se encontraron archivos no validos.");
            }
        }
    });

});


