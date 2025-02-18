document.addEventListener("DOMContentLoaded", function () {
    let selectedElement = null;

// Load the list of available pages
window.loadPageList = function () {
    fetch("cms.php?action=list")
        .then(response => response.json())
        .then(data => {
            let list = document.getElementById("page-list");
            list.innerHTML = "";
            data.forEach(page => {
                let option = document.createElement("option");
                option.value = page;
                option.textContent = page;
                list.appendChild(option);
            });
        })
        .catch(error => alert("Error loading file list: " + error));
};



// Load the selected page into the editor
window.loadPage = function () {
    let page = document.getElementById("page-list").value;
    if (!page) return alert("Select a page!");

    fetch("cms.php?page=" + encodeURIComponent(page))
        .then(response => response.text())
        .then(data => {
            document.getElementById("editor").innerHTML = data;
            document.getElementById("source").value = data;
        })
        .catch(error => alert("Error loading page: " + error));
};

    window.toggleSource = function () {
        let editor = document.getElementById("editor");
        let source = document.getElementById("source");
        if (editor.style.display === "none") {
            editor.style.display = "block";
            source.style.display = "none";
            editor.innerHTML = source.value;
        } else {
            editor.style.display = "none";
            source.style.display = "block";
            source.value = editor.innerHTML;
        }
    };

// Save the edited page back to the file
window.savePage = function () {
    let page = document.getElementById("page-list").value;
    if (!page) return alert("Select a page!");

    let content = document.getElementById("editor").style.display === "none"
        ? document.getElementById("source").value
        : document.getElementById("editor").innerHTML;

    fetch("cms.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new URLSearchParams({
            action: "save",
            page: page,
            content: content
        })
    })
    .then(response => response.text())
    .then(data => alert(data))
    .catch(error => alert("Error saving page: " + error));
};
// Call this function when the page loads
window.onload = loadPageList;

    window.insertImage = function () {
        let imgUrl = prompt("Enter image URL:", "");
        if (imgUrl) {
            let img = document.createElement("img");
            img.src = imgUrl;
            img.style.maxWidth = "100%";
            img.draggable = true;
            img.classList.add("editable");
            document.getElementById("editor").appendChild(img);
            makeElementsEditable();
        }
    };

    window.insertTable = function () {
        let rows = prompt("Enter number of rows:", "2");
        let cols = prompt("Enter number of columns:", "2");
        if (!rows || !cols) return;

        let table = "<table border='1'>";
        for (let i = 0; i < rows; i++) {
            table += "<tr>";
            for (let j = 0; j < cols; j++) {
                table += "<td class='editable' contenteditable='true'>Cell</td>";
            }
            table += "</tr>";
        }
        table += "</table>";

        document.execCommand("insertHTML", false, table);
        makeElementsEditable();
    };

    function makeElementsEditable() {
        document.querySelectorAll("#editor img, #editor table").forEach(el => {
            el.draggable = true;
            el.addEventListener("click", () => selectElement(el));
            el.addEventListener("contextmenu", (e) => {
                e.preventDefault();
                openStylePanel(el);
            });
        });
    }

    function selectElement(el) {
        selectedElement = el;
        el.style.border = "2px solid blue";
    }

    function openStylePanel(el) {
        selectedElement = el;
        document.getElementById("style-width").value = el.style.width || "";
        document.getElementById("style-height").value = el.style.height || "";
        document.getElementById("style-text-align").value = el.style.textAlign || "";
        document.getElementById("style-border").value = el.style.border || "";
        document.getElementById("style-panel").style.display = "block";
    }

    function createPage() {
    // Prompt user for page name
    const pageName = prompt("Enter the name for the new page:");

    // Check if the user entered a name
    if (pageName && pageName.trim() !== "") {
        // Send a request to the server to create the new page
        fetch('/cms/cms.php?action=createPage', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ pageName: pageName })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Page created successfully!");
                location.reload();  // Reload to update the page list
            } else {
                alert("Error creating page: " + data.error);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Failed to create page.");
        });
    } else {
        alert("Please enter a valid page name.");
    }
}


    window.applyStyles = function () {
        if (!selectedElement) return alert("Select an element first!");

        selectedElement.style.width = document.getElementById("style-width").value;
        selectedElement.style.height = document.getElementById("style-height").value;
        selectedElement.style.textAlign = document.getElementById("style-text-align").value;
        selectedElement.style.border = document.getElementById("style-border").value;
    };

    document.querySelector("#editor").addEventListener("click", (e) => {
        if (!e.target.classList.contains("editable")) {
            document.getElementById("style-panel").style.display = "none";
        }
    });
});
