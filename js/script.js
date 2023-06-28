function getCategory(data){
    const ulFrag = document.createDocumentFragment();
    const defaultSel = document.createElement('option');
    defaultSel.value = '0';
    let sHtml = `select category`;
    defaultSel.innerHTML = sHtml;
    ulFrag.appendChild(defaultSel);
    for (const key in data.categories){
        const sel = document.createElement('option');
        sel.value = `${data.categories[key].name}`;
        sHtml = `${data.categories[key].name}`;
        sel.innerHTML = sHtml;
        ulFrag.appendChild(sel);
    }
    const categoryWindow = document.getElementById('categoryDropdown');
    categoryWindow.appendChild(ulFrag);
    categoryWindow.addEventListener("change",(newVal) =>{
        const newValue = newVal.target.value;
        const allBooks = document.getElementsByTagName("li");
        for (let i=0, len =allBooks.length;i<len;i++){
            if(allBooks[i].classList.contains(newValue) || newValue==0)
                allBooks[i].style.display = "block";
            else
                allBooks[i].style.display = "none";
        }
        });  
    }

fetch("./category.json")
    .then(response => response.json())
    .then(data => getCategory(data));
