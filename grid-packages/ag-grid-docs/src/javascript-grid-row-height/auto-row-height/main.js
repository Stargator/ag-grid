
var gridOptions = {
    columnDefs: [
        { headerName: 'Row #', field: 'rowNumber', maxWidth: 100 },
        { field: 'autoA' },
        { field: 'autoB' },
        { field: 'autoC' }
    ],
    defaultColDef: {
        flex: 1,
        cellClass: 'cell-wrap-text',
        autoHeight: true,
        sortable: true,
        resizable: true,
    },
    rowHeight: 275,
    onColumnResized: onColumnResized,
    onGridReady: function(params) {
        // in this example, the CSS styles are loaded AFTER the grid is created,
        // so we put this in a timeout, so height is calculated after styles are applied.
        setTimeout(function () {
            params.api.setRowData(createRowData());
        }, 500);
    }
};

function onColumnResized(params) {
    params.api.resetRowHeights();
}

// setup the grid after the page has finished loading
document.addEventListener('DOMContentLoaded', function () {
    var gridDiv = document.querySelector('#myGrid');
    new agGrid.Grid(gridDiv, gridOptions);
});

function createRowData() {
    var latinSentence = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    var latinWords = latinSentence.split(' ');

    var rowData = [];

    function generateRandomSentence(row, col) {
        var wordCount = ((row + 1) * (col + 1) * 733 * 19) % latinWords.length;
        var parts = [];
        for (var i = 0; i < wordCount; i++) {
            parts.push(latinWords[i]);
        }
        var sentence = parts.join(' ');
        return sentence + '.';
    }

    // create 100 rows
    for (var i = 0; i < 100; i++) {
        var item = {
            rowNumber: 'Row ' + i,
            autoA: generateRandomSentence(i, 1),
            autoB: generateRandomSentence(i, 2),
            autoC: generateRandomSentence(i, 3)
        };
        rowData.push(item);
    }

    return rowData;
}
