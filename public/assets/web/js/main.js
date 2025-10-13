try {
} catch (error) {}

document.querySelectorAll(".assign-card").forEach(function (card) {
    const togglerBtn = card.querySelector(".toggler-btn");
    const toggleIcon = card.querySelector(".rotate-icon");
    const eyeBtn = card.querySelector(".eye-btn");
    const otherDesc = card.querySelector(".other-desc-area");
    const pendingBtns = card.querySelector(".pending-btn-wrapper");
    const innerBtns = pendingBtns.querySelectorAll("button");

    let isExpanded = false;

    togglerBtn.addEventListener("click", function (e) {
        e.stopPropagation();

        toggleIcon.classList.toggle("rotated");

        [eyeBtn, otherDesc, pendingBtns].forEach(function (el) {
            if (el.classList.contains("hidden-class")) {
                el.classList.remove("hidden-class");
                el.classList.add("smooth-toggle");
                isExpanded = true;
            } else {
                el.classList.remove("smooth-toggle");
                el.classList.add("hidden-class");
                isExpanded = false;
            }
        });
    });

    innerBtns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    });

    card.addEventListener("click", function () {
        if (isExpanded) {
            const url = card.getAttribute("data-url");
            if (url) {
                window.location.href = url;
            }
        }
    });
});

// $(".menu-btn, .hamburger, .hamburger2").click(function () {
//     const isActive = $(".side-bar").toggleClass("active").hasClass("active");

//     // console.log("Sidebar active:", isActive);

//     if (isActive) {
//         $(".menu-list-2").css("justify-content", "center");
//         $("#logo-img").attr("src", "assets/web/images/link-img-open2.png");
//     } else {
//         $(".menu-list-2").css("justify-content", "flex-end");
//         $("#logo-img").attr("src", "assets/web/images/link-img-open.png");
//     }
// });

const form = document.getElementById("form");

let openBoostrapModal = (id = "#exampleModal4") => {
    const button = document.createElement("button");
    button.setAttribute("data-bs-toggle", "modal");
    button.setAttribute("data-bs-target", id);
    document.body.appendChild(button);
    button.click();
    document.body.removeChild(button);
};

if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const userName = form.querySelector("[name='name']").value.trim();
        const password = form.querySelector("[name='password']").value.trim();
        if (userName && password) {
            const modal = bootstrap.Modal.getInstance(
                document.getElementById("exampleModal4")
            );
            modal.hide();
            openBoostrapModal("#exampleModal5");
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
    openBoostrapModal("#exampleModal4");

    const links = document.querySelectorAll("li.nav-item a");
    const currentUrl = window.location.href.split("?")[0].replace(/\/$/, "");
    links.forEach((link) => {
        const linkUrl = link.href.split("?")[0].replace(/\/$/, "");

        if (currentUrl === linkUrl) {
            const navItem = link.closest("li.nav-item");
            if (navItem) {
                navItem.classList.add("active");
            }
        }
    });
});

function updateTimeAndDate() {
    const now = new Date();

    const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const hours = String(now.getHours()).padStart(2, "0"); // 24-hour format
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const day = days[now.getDay()];
    const date = String(now.getDate()).padStart(2, "0");
    const month = months[now.getMonth()];
    const year = now.getFullYear();

    const time = `${hours}:${minutes}`;
    const fullDate = `${day}, ${date} ${month} ${year}`;

    document.getElementById("time").textContent = time;
    document.getElementById("date").textContent = fullDate;
}

setInterval(updateTimeAndDate, 1000);

updateTimeAndDate();

$(".doc-card-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".doc-prev-btn"),
    nextArrow: $(".doc-next-btn"),
    dots: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1440,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".video-card-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".video-prev-btn"),
    nextArrow: $(".video-next-btn"),
    dots: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

let noimage = "./assets/images/No_Image_Available.jpg";

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("img-preview").src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        document.getElementById("img-preview").src = noimage;
    }
}

// document.addEventListener("DOMContentLoaded", () => {
//     const pg = document.querySelector(".table-bodys");

//     if (pg) {
//         pg.addEventListener("click", (e) => {
//             setTimeout(() => {
//                 window.location.href = "View";
//             }, 0);
//         });
//     } else {
//         console.error("Element with class 'table-bodys' not found.");
//     }
// });

$(document).ready(function () {
    $(".contact-list").click(function () {
        $(".message-left").toggle(800);
    });

    // $("#menu-btn, #menu-btn2").click(function () {
    //     $("#header-offcanva").toggleClass("active-sidebar", "2000");
    // });
});

// const masterCheck = document.getElementById("masterCheckbox");
// const slaveChecks = document.querySelectorAll(".slaveCheckbox");

// masterCheck.addEventListener("change", function () {
//     slaveChecks.forEach((checkbox) => {
//         checkbox.checked = masterCheck.checked;
//     });
// });

// const masterCheck1 = document.getElementById("masterCheckbox1");
// const slaveChecks1 = document.querySelectorAll(".slaveCheckbox");

// masterCheck1.addEventListener("change", function () {
//     slaveChecks1.forEach((checkbox) => {
//         checkbox.checked = masterCheck1.checked;
//     });
// });





// const btnSave = document.querySelector(".save-upload");
// const tableBody = document.querySelector(".table-row-2");
// const dismissBtn = document.querySelector(".dismiss-modal");
// const fileInput = document.querySelector(".file-input");
// const dropZone = document.getElementById("drop-zone");
// const previewContainer = document.querySelector(".preview-multiple");

// let filesToUpload = [];

// // Reset modal when opened
// document.getElementById("exampleModal3").addEventListener("show.bs.modal", () => {
//     fileInput.value = "";
//     filesToUpload = [];
//     previewContainer.innerHTML = "";
// });

// // Drag & drop handlers
// dropZone.addEventListener("click", () => fileInput.click());
// dropZone.addEventListener("dragover", (e) => {
//     e.preventDefault();
//     dropZone.classList.add("dragover");
// });
// dropZone.addEventListener("dragleave", () => {
//     dropZone.classList.remove("dragover");
// });
// dropZone.addEventListener("drop", (e) => {
//     e.preventDefault();
//     dropZone.classList.remove("dragover");
//     handleFiles(e.dataTransfer.files);
// });

// fileInput.addEventListener("change", (e) => handleFiles(e.target.files));

// function handleFiles(selectedFiles) {
//     for (let file of selectedFiles) {
//         filesToUpload.push(file);

//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = e.target.result;

//             const previewBox = document.createElement("div");
//             previewBox.style.textAlign = "center";
//             previewBox.style.width = "70px";
//             previewBox.innerHTML = `
//                 <img src="${iconSrc}" style="width: 100%; border-radius: 5px;" />
//                 <small style="font-size: 10px; word-break: break-word;">${file.name}</small>
//             `;
//             previewContainer.appendChild(previewBox);
//         };

//         reader.readAsDataURL(file);
//     }
// }

// btnSave.addEventListener("click", () => {
//     if (filesToUpload.length === 0) return;

//     let filesPreviewHTML = "";
//     let totalSize = 0;
//     let fileDataArray = [];
//     let filesRead = 0;

//     filesToUpload.forEach((file) => {
//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             const base64 = e.target.result;

//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = base64;

//             filesPreviewHTML += `
//                 <div style="display:inline-block; text-align:center; margin-right:8px;">
//                     <img src="${iconSrc}" width="30"><br/>
//                     <small style="font-size:10px;">${file.name}</small>
//                 </div>
//             `;

//             totalSize += file.size;
//             fileDataArray.push({ name: file.name, data: base64 });
//             filesRead++;

//             if (filesRead === filesToUpload.length) {
//                 const size = (totalSize / 1000 / 1000).toFixed(2);
//                 const sizeUnit = size.toString().startsWith("0.") ? "KB" : "MB";

//                 const now = new Date();
//                 const date = `${now.getMonth() + 1}/${now.getDate()}/${now.getFullYear()}`;
//                 const hours = now.getHours().toString().padStart(2, "0");
//                 const minutes = now.getMinutes().toString().padStart(2, "0");
//                 const ampm = hours < 12 ? " AM " : " PM ";
//                 const time = `${hours}:${minutes}${ampm}`;
//                 const dataAttr = encodeURIComponent(JSON.stringify(fileDataArray));

//                 const row = `
//                     <tr>
//                         <td><input type="checkbox" class="slaveCheckbox"></td>
//                         <td>${date} ${time} CDT</td>
//                         <td>${filesPreviewHTML}</td>
//                         <td>Multiple Files</td>
//                         <td>Lorem Ipsum Dummy</td>
//                         <td>${size} ${sizeUnit}</td>
//                         <td>
//                             <div class="dropdown">
//                                 <button class="btn elipse-btn" data-bs-toggle="dropdown">
//                                     <i class="fa-solid fa-ellipsis-vertical"></i>
//                                 </button>
//                                 <ul class="dropdown-menu">
//                                     <li class="drp-list">
//                                         <button class="dropdown-item download-all" data-files='${dataAttr}'>Download All</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item delete-btn">Delete</button>
//                                     </li>
//                                 </ul>
//                             </div>
//                         </td>
//                     </tr>
//                 `;

//                 tableBody.insertAdjacentHTML("beforeend", row);
//                 dismissBtn.click();
//                 fileInput.value = "";
//                 filesToUpload = [];
//                 previewContainer.innerHTML = "";

//                 deleteRow();
//                 downloadAll();
//                 checkRows();
//             }
//         };

//         reader.readAsDataURL(file);
//     });
// });

// function deleteRow() {
//     const deleteBtns = document.querySelectorAll(".delete-btn");
//     deleteBtns.forEach(btn => {
//         btn.addEventListener("click", () => {
//             const row = btn.closest("tr");
//             row.remove();
//         });
//     });
// }

// function downloadAll() {
//     const downloadBtns = document.querySelectorAll(".download-all");
//     downloadBtns.forEach(btn => {
//         btn.addEventListener("click", () => {
//             const files = JSON.parse(decodeURIComponent(btn.getAttribute("data-files")));
//             const zip = new JSZip();
//             files.forEach(file => {
//                 const base64Data = file.data.split(",")[1]; // remove base64 prefix
//                 zip.file(file.name, base64Data, { base64: true });
//             });

//             zip.generateAsync({ type: "blob" }).then((content) => {
//                 const a = document.createElement("a");
//                 a.href = URL.createObjectURL(content);
//                 a.download = "my-files.zip";
//                 a.click();
//                 URL.revokeObjectURL(a.href);
//             });
//         });
//     });
// }

// function checkRows() {
//     const masterCheck = document.getElementById("masterCheckbox");
//     const slaveChecks = document.querySelectorAll(".slaveCheckbox");

//     if (masterCheck) {
//         masterCheck.addEventListener("change", () => {
//             slaveChecks.forEach((cb) => {
//                 cb.checked = masterCheck.checked;
//             });
//         });
//     }
// }


// // ✅ Fixed Version: File Upload - Add Modal Shows Names, Table Edits Name Without Breaking Images

// const btnSave = document.querySelector(".save-upload");
// const tableBody = document.querySelector(".table-row-2");
// const dismissBtn = document.querySelector(".dismiss-modal");
// const fileInput = document.querySelector(".file-input");
// const dropZone = document.getElementById("drop-zone");
// const previewContainer = document.querySelector(".preview-multiple");

// let filesToUpload = [];
// let editTargetButton = null;

// // Reset modal when opened
// const exampleModal = document.getElementById("exampleModal3");
// exampleModal.addEventListener("show.bs.modal", () => {
//     fileInput.value = "";
//     filesToUpload = [];
//     previewContainer.innerHTML = "";
// });

// // Drag & drop handlers
// dropZone.addEventListener("click", () => fileInput.click());
// dropZone.addEventListener("dragover", (e) => {
//     e.preventDefault();
//     dropZone.classList.add("dragover");
// });
// dropZone.addEventListener("dragleave", () => {
//     dropZone.classList.remove("dragover");
// });
// dropZone.addEventListener("drop", (e) => {
//     e.preventDefault();
//     dropZone.classList.remove("dragover");
//     handleFiles(e.dataTransfer.files);
// });

// fileInput.addEventListener("change", (e) => handleFiles(e.target.files));

// function handleFiles(selectedFiles) {
//     for (let file of selectedFiles) {
//         filesToUpload.push(file);

//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = e.target.result;

//             const previewBox = document.createElement("div");
//             previewBox.style.textAlign = "center";
//             previewBox.style.width = "70px";
//             previewBox.innerHTML = `
//                 <img src="${iconSrc}" style="width: 100%; border-radius: 5px;" />
//                 <small style="font-size: 10px; word-break: break-word;">${file.name}</small>
//             `;
//             previewContainer.appendChild(previewBox);
//         };

//         reader.readAsDataURL(file);
//     }
// }

// btnSave.addEventListener("click", () => {
//     if (filesToUpload.length === 0) return;

//     let filesPreviewHTML = "";
//     let totalSize = 0;
//     let fileDataArray = [];
//     let filesRead = 0;

//     filesToUpload.forEach((file) => {
//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             const base64 = e.target.result;

//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = base64;

//             filesPreviewHTML += `
//                 <div style="display:inline-block; text-align:center; margin-right:8px;">
//                     <img src="${iconSrc}" width="30">
//                 </div>
//             `;

//             totalSize += file.size;
//             fileDataArray.push({ name: file.name, data: base64, originalName: file.name });
//             filesRead++;

//             if (filesRead === filesToUpload.length) {
//                 const size = (totalSize / 1000 / 1000).toFixed(2);
//                 const sizeUnit = size.toString().startsWith("0.") ? "KB" : "MB";

//                 const now = new Date();
//                 const date = `${now.getMonth() + 1}/${now.getDate()}/${now.getFullYear()}`;
//                 const hours = now.getHours().toString().padStart(2, "0");
//                 const minutes = now.getMinutes().toString().padStart(2, "0");
//                 const ampm = hours < 12 ? " AM " : " PM ";
//                 const time = `${hours}:${minutes}${ampm}`;
//                 const dataAttr = encodeURIComponent(JSON.stringify(fileDataArray));

//                 const row = `
//                     <tr>
//                         <td><input type="checkbox" class="slaveCheckbox"></td>
//                         <td>${date} ${time} CDT</td>
//                         <td>${filesPreviewHTML}</td>
//                         <td><span class="file-names-text">${fileDataArray.map(f => f.originalName).join(", ")}</span></td>
//                         <td>Lorem Ipsum Dummy</td>
//                         <td>${size} ${sizeUnit}</td>
//                         <td>
//                             <div class="dropdown">
//                                 <button class="btn elipse-btn" data-bs-toggle="dropdown">
//                                     <i class="fa-solid fa-ellipsis-vertical"></i>
//                                 </button>
//                                 <ul class="dropdown-menu">
//                                     <li class="drp-list">
//                                         <button class="dropdown-item download-all" data-files='${dataAttr}'>Download All</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item edit-btn" data-files='${dataAttr}'>Edit</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item delete-btn">Delete</button>
//                                     </li>
//                                 </ul>
//                             </div>
//                         </td>
//                     </tr>
//                 `;

//                 tableBody.insertAdjacentHTML("beforeend", row);
//                 dismissBtn.click();
//                 fileInput.value = "";
//                 filesToUpload = [];
//                 previewContainer.innerHTML = "";

//                 deleteRow();
//                 downloadAll();
//                 addEditButtonListener();
//                 checkRows();
//             }
//         };

//         reader.readAsDataURL(file);
//     });
// });

function deleteRow() {
    const deleteBtns = document.querySelectorAll(".delete-btn");
    deleteBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const row = btn.closest("tr");
            row.remove();
        });
    });
}

function downloadAll() {
    const downloadBtns = document.querySelectorAll(".download-all");
    downloadBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const files = JSON.parse(decodeURIComponent(btn.getAttribute("data-files")));
            const zip = new JSZip();
            files.forEach(file => {
                const base64Data = file.data.split(",")[1];
                zip.file(file.name, base64Data, { base64: true });
            });

            zip.generateAsync({ type: "blob" }).then((content) => {
                const a = document.createElement("a");
                a.href = URL.createObjectURL(content);
                a.download = "my-files.zip";
                a.click();
                URL.revokeObjectURL(a.href);
            });
        });
    });
}

function checkRows() {
    const masterCheck = document.getElementById("masterCheckbox");
    const slaveChecks = document.querySelectorAll(".slaveCheckbox");

    if (masterCheck) {
        masterCheck.addEventListener("change", () => {
            slaveChecks.forEach((cb) => {
                cb.checked = masterCheck.checked;
            });
        });
    }
}

function addEditButtonListener() {
    document.querySelectorAll(".edit-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            editTargetButton = btn;
            const dataAttr = btn.getAttribute("data-files");
            const files = JSON.parse(decodeURIComponent(dataAttr));

            const container = document.getElementById("edit-file-inputs");
            container.innerHTML = "";

            files.forEach((file, index) => {
                const div = document.createElement("div");
                div.classList.add("col-md-6", "edit-file-group");
                div.innerHTML = `
                    <label>File ${index + 1}</label>
                    <input type="text" class="form-control file-name-input" data-index="${index}" value="${file.originalName || file.name}" />
                `;
                container.appendChild(div);
            });

            const editModal = new bootstrap.Modal(document.getElementById("editFileModal"));
            editModal.show();
        });
    });
}

const saveEditFiles = document.getElementById("saveEditFiles");
saveEditFiles.addEventListener("click", () => {
    const inputs = document.querySelectorAll(".file-name-input");
    const files = JSON.parse(decodeURIComponent(editTargetButton.getAttribute("data-files")));

    inputs.forEach(input => {
        const index = input.dataset.index;
        files[index].originalName = input.value;
    });

    const updatedDataAttr = encodeURIComponent(JSON.stringify(files));
    editTargetButton.setAttribute("data-files", updatedDataAttr);

    const row = editTargetButton.closest("tr");
    const fileNameCell = row.querySelector(".file-names-text");
    fileNameCell.innerText = files.map(f => f.originalName || f.name).join(", ");

    // const filePreviewCell = row.querySelector("td:nth-child(3)");
    // let previewHtml = "";
    // files.forEach(file => {
    //     const ext = (file.originalName || file.name).split(".").pop().toLowerCase();
    //     let iconSrc = "assets/web/images/no_image.png";
    //     if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
    //     else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
    //     else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
    //     else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = file.data;

    //     previewHtml += `
    //         <div style="display:inline-block; text-align:center; margin-right:8px;">
    //             <img src="${iconSrc}" width="30">
    //         </div>
    //     `;
    // });
    // filePreviewCell.innerHTML = previewHtml;

    const downloadBtn = row.querySelector(".download-all");
    downloadBtn.setAttribute("data-files", updatedDataAttr);
    editTargetButton.setAttribute("data-files", updatedDataAttr);

    bootstrap.Modal.getInstance(document.getElementById("editFileModal")).hide();
});


// 

// const btnSave = document.querySelector(".save-upload");
// const tableBody = document.querySelector(".table-row-2");
// const dismissBtn = document.querySelector(".dismiss-modal");
// const fileInput = document.querySelector(".file-input");
// const dropZone = document.getElementById("drop-zone");
// const previewContainer = document.querySelector(".preview-multiple");
// const cropMainBtn = document.getElementById("cropMainBtn");
// const addTextMainBtn = document.getElementById("addTextMainBtn");
// const drawMainBtn = document.getElementById("drawMainBtn");
 
// let selectedFile = null;
// let currentImageSrc = null;
// let editingRow = null;
 
// const exampleModal = document.getElementById("exampleModal3");
// exampleModal.addEventListener("show.bs.modal", () => {
//   fileInput.value = "";
//   selectedFile = null;
//   previewContainer.innerHTML = "";
// });
 
// dropZone.addEventListener("click", () => fileInput.click());
// dropZone.addEventListener("dragover", (e) => {
//   e.preventDefault();
//   dropZone.classList.add("dragover");
// });
// dropZone.addEventListener("dragleave", () => dropZone.classList.remove("dragover"));
// dropZone.addEventListener("drop", (e) => {
//   e.preventDefault();
//   dropZone.classList.remove("dragover");
//   handleFile(e.dataTransfer.files[0]);
// });
// fileInput.addEventListener("change", (e) => handleFile(e.target.files[0]));
 
// function handleFile(file) {
//   if (!file) return;
//   const ext = file.name.split(".").pop().toLowerCase();
//   if (!["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) {
//     alert("Only image files are allowed!");
//     return;
//   }
//   const reader = new FileReader();
//   reader.onload = (e) => {
//     currentImageSrc = e.target.result;
//     selectedFile = file;
//     renderPreview();
//   };
//   reader.readAsDataURL(file);
// }
 
// function renderPreview() {
//   previewContainer.innerHTML = `
//     <div class="preview-item text-center">
//       <img src="${currentImageSrc}" style="width:120px;border-radius:5px;display:block;margin:auto;">
//     </div>
//   `;
// }
 
// cropMainBtn.addEventListener("click", () => openCropModal());
// function openCropModal() {
//   if (!currentImageSrc) return alert("Please upload or select an image first!");
//   const modal = document.createElement("div");
//   modal.classList.add("crop-modal");
//   modal.innerHTML = `
//     <div class="crop-wrapper" style="position:fixed;top:0;left:0;width:100%;height:100%;
//     background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;z-index:9999;">
//       <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;">
//         <img id="crop-image" src="${currentImageSrc}" style="max-width:400px;max-height:400px;">
//         <br>
//         <button id="cropSave" class="btn btn-primary mt-2">Save Crop</button>
//         <button id="cropCancel" class="btn btn-secondary mt-2">Cancel</button>
//       </div>
//     </div>
//   `;
//   document.body.appendChild(modal);
 
//   const image = modal.querySelector("#crop-image");
//   const cropper = new Cropper(image, { aspectRatio: NaN });
 
//   modal.querySelector("#cropSave").addEventListener("click", () => {
//     const canvas = cropper.getCroppedCanvas();
//     currentImageSrc = canvas.toDataURL("image/png");
//     renderPreview();
 
//     if (editingRow) updateEditedImage();
 
//     document.body.removeChild(modal);
//   });
 
//   modal.querySelector("#cropCancel").addEventListener("click", () => document.body.removeChild(modal));
// }
 
// addTextMainBtn.addEventListener("click", () => openTextModal());
// function openTextModal() {
//   if (!currentImageSrc) return alert("Please upload or select an image first!");
//   const mainModal = document.getElementById("exampleModal3");
 
//   if (!editingRow) mainModal.style.display = "none";
 
//   const modal = document.createElement("div");
//   modal.classList.add("text-modal");
//   modal.innerHTML = `
//     <div style="position:fixed;top:0;left:0;width:100%;height:100%;
//     background:rgba(0,0,0,0.8);display:flex;align-items:center;
//     justify-content:center;z-index:9999;">
//       <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;max-width:500px;">
//         <canvas id="textCanvas" width="400" height="400" style="border:1px solid #ccc;cursor:move;"></canvas><br>
//         <input type="text" id="textInput" placeholder="Enter text" class="form-control mt-2">
//         <div class="d-flex gap-2 mt-2">
//           <input type="color" id="textColor" value="#000000" class="form-control" style="height: 38px;">
//           <input type="number" id="textSize" value="24" min="10" max="100" class="form-control">
//         </div>
//         <button id="textAdd" class="btn btn-primary mt-3">Add Text</button>
//         <button id="textSave" class="btn btn-success mt-3">Save</button>
//         <button id="textCancel" class="btn btn-secondary mt-3">Cancel</button>
//       </div>
//     </div>
//   `;
//   document.body.appendChild(modal);
 
//   const canvas = modal.querySelector("#textCanvas");
//   const ctx = canvas.getContext("2d");
//   const img = new Image();
//   img.src = currentImageSrc;
//   img.onload = () => ctx.drawImage(img, 0, 0, 400, 400);
 
//   let text = "";
//   let color = "#000";
//   let size = 24;
//   let posX = 50;
//   let posY = 50;
//   let dragging = false;
//   let offsetX = 0;
//   let offsetY = 0;
 
//   function redraw() {
//     ctx.clearRect(0, 0, 400, 400);
//     ctx.drawImage(img, 0, 0, 400, 400);
//     if (text) {
//       ctx.font = `${size}px Arial`;
//       ctx.fillStyle = color;
//       ctx.fillText(text, posX, posY);
//     }
//   }
 
//   modal.querySelector("#textAdd").addEventListener("click", () => {
//     text = modal.querySelector("#textInput").value;
//     color = modal.querySelector("#textColor").value;
//     size = parseInt(modal.querySelector("#textSize").value);
//     if (!text) return alert("Enter text!");
//     redraw();
//   });
 
//   canvas.addEventListener("mousedown", (e) => {
//     if (!text) return;
//     const rect = canvas.getBoundingClientRect();
//     const mouseX = e.clientX - rect.left;
//     const mouseY = e.clientY - rect.top;
//     const textWidth = ctx.measureText(text).width;
//     const textHeight = size;
//     if (
//       mouseX >= posX &&
//       mouseX <= posX + textWidth &&
//       mouseY <= posY &&
//       mouseY >= posY - textHeight
//     ) {
//       dragging = true;
//       offsetX = mouseX - posX;
//       offsetY = mouseY - posY;
//     }
//   });
 
//   canvas.addEventListener("mousemove", (e) => {
//     if (!dragging) return;
//     const rect = canvas.getBoundingClientRect();
//     posX = e.clientX - rect.left - offsetX;
//     posY = e.clientY - rect.top - offsetY;
//     redraw();
//   });
 
//   canvas.addEventListener("mouseup", () => (dragging = false));
//   canvas.addEventListener("mouseleave", () => (dragging = false));
 
//   modal.querySelector("#textSave").addEventListener("click", () => {
//     currentImageSrc = canvas.toDataURL("image/png");
//     renderPreview();
 
//     if (editingRow) updateEditedImage();
 
//     document.body.removeChild(modal);
 
//     if (!editingRow) mainModal.style.display = "block";
//   });
 
//   modal.querySelector("#textCancel").addEventListener("click", () => {
//     document.body.removeChild(modal);
//     if (!editingRow) mainModal.style.display = "block";
//   });
// }
 
// drawMainBtn.addEventListener("click", () => openDrawModal());
// function openDrawModal() {
//   if (!currentImageSrc) return alert("Please upload or select an image first!");
//   const modal = document.createElement("div");
//   modal.classList.add("draw-modal");
//   modal.innerHTML = `
//     <div style="position:fixed;top:0;left:0;width:100%;height:100%;
//     background:rgba(0,0,0,0.8);display:flex;align-items:center;
//     justify-content:center;z-index:9999;">
//       <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;">
//       <canvas id="drawCanvas" width="400" height="400" style="border:1px solid #ccc;cursor:crosshair;"></canvas><br>
//       <input type="color" id="drawColor" value="#000000" class="form-control mb-2" style="height: 38px;">
//         <button id="drawSave" class="btn btn-success mt-2">Save</button>
//         <button id="drawCancel" class="btn btn-secondary mt-2">Cancel</button>
//       </div>
//     </div>
//   `;
//   document.body.appendChild(modal);
 
//   const canvas = modal.querySelector("#drawCanvas");
//   const ctx = canvas.getContext("2d");
//   const img = new Image();
//   img.src = currentImageSrc;
//   img.onload = () => ctx.drawImage(img, 0, 0, 400, 400);
 
//   let drawing = false;
//   canvas.addEventListener("mousedown", () => (drawing = true));
//   canvas.addEventListener("mouseup", () => {
//     drawing = false;
//     ctx.beginPath();
//   });
//   canvas.addEventListener("mousemove", (e) => {
//     if (!drawing) return;
//     const rect = canvas.getBoundingClientRect();
//     ctx.strokeStyle = modal.querySelector("#drawColor").value;
//     ctx.lineWidth = 3;
//     ctx.lineCap = "round";
//     ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
//     ctx.stroke();
//     ctx.beginPath();
//     ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
//   });
 
//   modal.querySelector("#drawSave").addEventListener("click", () => {
//     currentImageSrc = canvas.toDataURL("image/png");
//     renderPreview();
 
//     if (editingRow) updateEditedImage();
 
//     document.body.removeChild(modal);
//   });
 
//   modal.querySelector("#drawCancel").addEventListener("click", () => document.body.removeChild(modal));
// }
 
// function updateEditedImage() {
//   const imgTag = editingRow.querySelector("img");
//   imgTag.src = currentImageSrc;
//   imgTag.setAttribute("data-src", currentImageSrc);
 
//   const downloadBtn = editingRow.querySelector(".download-single");
//   downloadBtn.setAttribute("data-file", encodeURIComponent(currentImageSrc));
// }
 
// btnSave.addEventListener("click", () => {
//   if (!selectedFile || !currentImageSrc) return alert("Please upload and edit an image first!");
//   const size = (selectedFile.size / 1000 / 1000).toFixed(2);
//   const sizeUnit = size.startsWith("0.") ? "KB" : "MB";
//   const now = new Date();
//   const date = `${now.getMonth() + 1}/${now.getDate()}/${now.getFullYear()}`;
//   const time = now.toLocaleTimeString();
 
//   const row = `
//     <tr>
//       <td><input type="checkbox" class="slaveCheckbox"></td>
//       <td>${date} ${time}</td>
//       <td><img src="${currentImageSrc}" width="30" data-src="${currentImageSrc}"></td>
//       <td>${selectedFile.name}</td>
//       <td>Image Upload</td>
//       <td>${size} ${sizeUnit}</td>
//       <td>
//         <div class="dropdown">
//           <button class="btn elipse-btn" data-bs-toggle="dropdown">
//             <i class="fa-solid fa-ellipsis-vertical"></i>
//           </button>
//           <ul class="dropdown-menu">
//             <li><button class="dropdown-item edit-btn">Edit</button></li>
//             <li><button class="dropdown-item download-single" data-file='${encodeURIComponent(currentImageSrc)}' data-name='${selectedFile.name}'>Download</button></li>
//             <li><button class="dropdown-item delete-btn">Delete</button></li>
//           </ul>
//         </div>
//       </td>
//     </tr>
//   `;
 
//   tableBody.insertAdjacentHTML("beforeend", row);
//   dismissBtn.click();
//   fileInput.value = "";
//   selectedFile = null;
//   currentImageSrc = null;
//   previewContainer.innerHTML = "";
 
//   deleteRow();
//   downloadSingle();
//   editRow();
// });
 
// function deleteRow() {
//   document.querySelectorAll(".delete-btn").forEach((btn) =>
//     btn.addEventListener("click", () => btn.closest("tr").remove())
//   );
// }
 
// function downloadSingle() {
//   document.querySelectorAll(".download-single").forEach((btn) =>
//     btn.addEventListener("click", () => {
//       const fileData = decodeURIComponent(btn.getAttribute("data-file"));
//       const fileName = btn.getAttribute("data-name");
//       const a = document.createElement("a");
//       a.href = fileData;
//       a.download = fileName;
//       a.click();
//     })
//   );
// }
 
// function editRow() {
//   document.querySelectorAll(".edit-btn").forEach((btn) => {
//     btn.addEventListener("click", () => {
//       editingRow = btn.closest("tr");
//       const imgTag = editingRow.querySelector("img");
//       currentImageSrc = imgTag.getAttribute("data-src");
 
//       const editModal = document.createElement("div");
//       editModal.classList.add("edit-main-modal");
//       editModal.innerHTML = `
//         <div style="position:fixed;top:0;left:0;width:100%;height:100%;
//         background:rgba(0,0,0,0.8);display:flex;align-items:center;
//         justify-content:center;z-index:10000;">
//           <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;max-width:500px;">
//             <h5>Edit Image</h5>
//             <img src="${currentImageSrc}" id="editPreviewImg" style="max-width:300px;border-radius:10px;display:block;margin:10px auto;">
//             <div class="d-flex justify-content-center gap-2 mt-3">
//               <button class="btn btn-primary" id="editCrop">Crop</button>
//               <button class="btn btn-warning" id="editText">Add Text</button>
//               <button class="btn btn-success" id="editDraw">Draw</button>
//             </div>
//             <button class="btn btn-secondary mt-3" id="editClose">Close</button>
//           </div>
//         </div>
//       `;
//       document.body.appendChild(editModal);
 
//       editModal.querySelector("#editCrop").addEventListener("click", () => {
//         document.body.removeChild(editModal);
//         openCropModal();
//       });
 
//       editModal.querySelector("#editText").addEventListener("click", () => {
//         document.body.removeChild(editModal);
//         openTextModal();
//       });
 
//       editModal.querySelector("#editDraw").addEventListener("click", () => {
//         document.body.removeChild(editModal);
//         openDrawModal();
//       });
 
//       editModal.querySelector("#editClose").addEventListener("click", () => {
//         document.body.removeChild(editModal);
//         editingRow = null;
//       });
 
//     });
//   });
// }