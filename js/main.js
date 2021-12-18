const table = document.querySelector('table');

const sortTable = function (index, type) {
    const tbody = table.querySelector('tbody');

    const compare = function(rowA, rowB) {
        const rowDataA = rowA.cells[index].innerHTML;
        const rowDataB = rowB.cells[index].innerHTML;

        switch (type) {
            case 'integer':
                return rowDataA - rowDataB;
            case 'text':
                if (rowDataA < rowDataB) return -1;
                if (rowDataA > rowDataB) return 1;
                return 0;
        }
    }

    let rows = [].slice.call(tbody.rows);

    rows.sort(compare);

    table.removeChild(tbody);

    for (let i = 0; i < rows.length; i++) {
        tbody.appendChild(rows[i])
    }

    table.appendChild(tbody)
}

table.addEventListener('click', function(e) {
    const el = e.target;
    if (el.nodeName != 'TH') return;

    const index = el.cellIndex;
    const type = el.getAttribute('data-type');


    sortTable(index, type);
});
