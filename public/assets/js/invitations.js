/* The design was inspired by https://uidesigndaily.com/posts/sketch-table-list-day-1262 */

const createNew = document.getElementById('createNew');
const table = document.getElementById('table');
const modal = document.getElementById('modal');
const form = document.getElementById('form');

createNew.addEventListener('click', () => {
    modal.style.display = 'block';
    form.addEventListener('submit', openModal);
});

// Open Modal
const openModal = (e) => {
    e.preventDefault();

    const tr = document.createElement('tr');

    const name = document.getElementById('name').value.trim();
    const domain = document.getElementById('domain').value.trim();
    const status = document.getElementById('status').value.trim();

    tr.innerHTML = `
            <td>${name}</td>
            <td>${domain} domains</td>
            <td>${status}</td>  
        `;

    table.appendChild(tr);
}

// Close Modal
window.addEventListener('click', e => {
    if(e.target === modal){
        modal.style.display = 'none';
    }
})


// Function to copy text to the clipboard
function copyToClipboard() {
    var link = document.getElementById('link').value;
    navigator.clipboard.writeText(link)
      .then(() => {
        console.log('Text copied to clipboard');
      })
      .catch((error) => {
        console.error('Failed to copy text: ', error);
      });
  }
  