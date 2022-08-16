//use window.scrollY
var scrollpos = window.scrollY;


function add_class_on_scroll(element) {
    element.classList.add('fixed');
}

function remove_class_on_scroll(element) {
    element.classList.remove('fixed');
}


// window.addEventListener('scroll', function () {
//         let header = document.getElementById("header");
//         if (header.classList.contains('banner')) {
//             scrollpos = window.scrollY;
//             if (!header.classList.contains('fixed')) {
//                 if (scrollpos < 1024) {
//                     add_class_on_scroll(header);
//                 }
//             }
//
//             if (header.classList.contains('fixed')) {
//                 if (scrollpos < 50) {
//                     remove_class_on_scroll(header);
//                 }
//             }
//         }
//     }
// );

setTimeout(function () {
    let formNav = document.getElementById('formNav');

    if (formNav) {
        let appForm = document.getElementById('appform');
        let fieldsets = appForm.getElementsByClassName('fieldset-cf7mls');


        let html = '';
        let text = '';
        let isCurrent = '';
        let order = '';
        html += '<ul>'
        for (let step of fieldsets) {
            if (step.classList.contains('cf7mls_current_fs')) {
                isCurrent = 'isCurrent';
            }
            order = step.getAttribute('data-cf7mls-order');
            text = step.getElementsByTagName('h3')[0];

            html += '<li data-order="' + order + '" class="' + isCurrent + '">' +
                '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 2">\n' +
                '  <line id="Line_51" data-name="Line 51" x2="50"  transform="translate(0 1)" fill="none" stroke="CurrentColor" stroke-width="2"/>\n' +
                '</svg>\n'
                + text.textContent + '</li>';

            isCurrent = '';
        }
        html += '</ul>'
        formNav.innerHTML = html;
    }

    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }


    document.querySelectorAll('.cf7mls_next').forEach(item => {
        item.addEventListener('click', event => {
            setTimeout(function () {
                UpdateNav();
            }, 300)
        })
    })


    document.querySelectorAll('.cf7mls_back').forEach(item => {
        item.addEventListener('click', event => {
            setTimeout(function () {
                UpdateNavBack();
            }, 300)
        })
    })

    function UpdateNavBack() {
        let ParentElement = document.querySelector('.cf7mls_current_fs');
        let ParentNum = ParentElement.getAttribute('data-cf7mls-order');
        ParentNum++;
        let element = document.querySelectorAll('li[data-order="' + ParentNum + '"]');
        element[0].classList.remove('isCurrent');
    }

    function UpdateNav() {
        let error = document.querySelector('fieldset div.wpcf7-response-output');
        let canPass = true;
        if (error !== null && error.classList.contains('wpcf7-validation-errors')) {
            canPass = false;
        }

        let ParentElement = document.querySelector('.cf7mls_current_fs');
        let ParentNum = ParentElement.getAttribute('data-cf7mls-order');
        let element = document.querySelectorAll('li[data-order="' + ParentNum + '"]');

        if (canPass) {
            element[0].classList.add('isCurrent');
        }
    }

    let fileUpload = document.getElementById('profileImage');

    if (fileUpload) {
        let DisplayFileName = document.getElementById('filename');
        fileUpload.addEventListener('change',function(){
            let fileName = fileUpload.files[0].name;
            DisplayFileName.innerText = 'Nuværende fil: ' + fileName;
        });
    }

    const menu = document.getElementById('menuToggle');
    menu.addEventListener('change', () => {
        const isOpen = menu.checked;
        if (isOpen) {
            document.querySelector('body').classList.add('fixed');
        } else {
            document.querySelector('body').classList.remove('fixed');
        }
    })

}, 100);
