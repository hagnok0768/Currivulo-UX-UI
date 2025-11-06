<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid Generator (Estilo do Vídeo)</title>
    <style>
        /* * 1. CSS RESET E TEMA BASE
         * (Cores e fontes para parecer com o vídeo)
        */
        :root {
            --color-bg-deep: #1a1a1a;
            --color-bg-medium: #252526;
            --color-bg-light: #3c3c3c;
            --color-border: #444;
            --color-text-primary: #d4d4d4;
            --color-text-secondary: #a9b7c6;
            --color-pink: #e74c3c;
            --color-pink-t: rgba(231, 76, 60, 0.5);
            --color-blue: #4a90e2;
            --color-gray-item: #d8d8d8;
            --color-gray-item-text: #333;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--color-bg-deep);
            color: var(--color-text-primary);
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        /* * 2. LAYOUT PRINCIPAL (HEADER, EDITOR, CÓDIGO)
         * Esta é a estrutura que faltava antes.
        */

        /* O container de tudo */
        .app-wrapper {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Cabeçalho (similar ao do vídeo) */
        .app-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 24px;
            background-color: var(--color-bg-medium);
            border-bottom: 1px solid var(--color-border);
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* O painel do editor (controles + grid) */
        .editor-panel {
            padding: 24px;
            background-color: var(--color-bg-deep);
            flex-grow: 1; /* Faz ocupar o espaço disponível */
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* O painel de código (HTML e CSS lado a lado) */
        .code-panel {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Duas colunas */
            gap: 24px;
            padding: 0 24px 24px 24px; /* Sem padding em cima */
            background-color: var(--color-bg-deep);
            min-height: 250px; /* Altura mínima para os blocos de código */
        }


        /* * 3. COMPONENTES ESTILIZADOS
        */

        /* Painel de Controles (Inputs) */
        .controls {
            display: flex;
            gap: 16px;
            align-items: center;
            background-color: var(--color-bg-medium);
            padding: 16px;
            border-radius: 8px;
            border: 1px solid var(--color-border);
        }

        .controls label {
            font-weight: 500;
        }

        .controls input[type="number"] {
            width: 60px;
            background-color: var(--color-bg-light);
            color: var(--color-text-primary);
            border: 1px solid var(--color-border);
            border-radius: 4px;
            padding: 8px;
            font-size: 16px;
            /* Remove setinhas do input number */
            -moz-appearance: textfield;
        }
        .controls input[type="number"]::-webkit-outer-spin-button,
        .controls input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .controls button {
            background-color: var(--color-blue);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-left: auto;
        }
        .controls button:hover {
            opacity: 0.9;
        }

        /* O Grid Interativo */
        #interactive-grid {
            display: grid;
            border: 2px dashed var(--color-border);
            background-color: var(--color-bg-medium);
            flex-grow: 1; /* Ocupa o espaço restante no editor-panel */
            position: relative; /* Chave para posicionar os itens */
            min-height: 300px;
        }

        /* Células de fundo (para detecção) */
        .grid-cell {
            z-index: 1;
            /* Borda sutil para ver as células, como no vídeo */
            border-right: 1px solid var(--color-bg-light);
            border-bottom: 1px solid var(--color-bg-light);
        }
        /* Remove borda extra no final */
        .grid-cell:nth-child(5n) { border-right: none; }
        /* A lógica de nth-child(5n) precisaria ser dinâmica com JS, 
           mas para 5 colunas funciona */

        /* Bloco rosa de seleção */
        .selection-box {
            position: absolute;
            background-color: var(--color-pink-t);
            border: 1px solid var(--color-pink);
            border-radius: 4px; /* O do vídeo tem borda arredondada */
            z-index: 10;
            pointer-events: none;
        }

        /* Bloco cinza já criado */
        .grid-item {
            background-color: var(--color-gray-item);
            border: 1px solid #555;
            border-radius: 5px;
            padding: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--color-gray-item-text);
            z-index: 5;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Caixas de Código (HTML e CSS) */
        .code-box {
            background-color: var(--color-bg-medium);
            border-radius: 8px;
            border: 1px solid var(--color-border);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%; /* Garante que ocupe o espaço no code-panel */
        }
        
        .code-box h3 {
            padding: 12px 16px;
            margin: 0;
            background-color: var(--color-bg-light);
            font-size: 16px;
            border-bottom: 1px solid var(--color-border);
        }

        .code-box pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            padding: 16px;
            margin: 0;
            font-family: "Courier New", Courier, monospace;
            font-size: 14px;
            color: var(--color-text-secondary);
            flex-grow: 1;
            overflow: auto;
        }
    </style>
</head>
<body>

    <div class="app-wrapper">
        <header class="app-header">
            <div>CSS Grid Generator</div>
            <div>Logo Generator</div>
        </header>

        <main class="editor-panel">
            <div class="controls">
                <label for="columns">Columns:</label>
                <input type="number" id="columns" value="5">

                <label for="rows">Rows:</label>
                <input type="number" id="rows" value="5">

                <label for="gap">Gap(px):</label>
                <input type="number" id="gap" value="8">

                <button id="reset-button">Reset</button>
            </div>
            
            <div id="interactive-grid"></div>
        </main>

        <footer class="code-panel">
            <div class="code-box">
                <h3>HTML</h3>
                <pre id="html-code">&lt;div class="parent"&gt;
&lt;/div&gt;</pre>
            </div>
            <div class="code-box">
                <h3>CSS</h3>
                <pre id="css-code">.parent {
    display: grid;
}
</pre>
            </div>
        </footer>
    </div>

    <script>
        // --- 1. REFERÊNCIAS AOS ELEMENTOS ---
        const gridContainer = document.getElementById('interactive-grid');
        const columnsInput = document.getElementById('columns');
        const rowsInput = document.getElementById('rows');
        const gapInput = document.getElementById('gap');
        const resetButton = document.getElementById('reset-button');
        const htmlCodeOutput = document.getElementById('html-code');
        const cssCodeOutput = document.getElementById('css-code');

        // --- 2. ESTADO DA APLICAÇÃO ---
        let state = {
            isMouseDown: false,
            selectionStart: null, // { row, col }
            selectionBox: null,   // O elemento visual rosa
            gridItems: [],        // Array para guardar os blocos criados
            gridSettings: {
                cols: 5,
                rows: 5,
                gap: 8
            }
        };

        // --- 3. FUNÇÕES PRINCIPAIS ---

        function createGrid() {
            gridContainer.innerHTML = '';
            
            state.gridSettings.cols = parseInt(columnsInput.value);
            state.gridSettings.rows = parseInt(rowsInput.value);
            state.gridSettings.gap = parseInt(gapInput.value);

            gridContainer.style.gridTemplateColumns = `repeat(${state.gridSettings.cols}, 1fr)`;
            gridContainer.style.gridTemplateRows = `repeat(${state.gridSettings.rows}, 1fr)`;
            gridContainer.style.gap = `${state.gridSettings.gap}px`;

            for (let r = 1; r <= state.gridSettings.rows; r++) {
                for (let c = 1; c <= state.gridSettings.cols; c++) {
                    const cell = document.createElement('div');
                    cell.classList.add('grid-cell');
                    cell.dataset.row = r;
                    cell.dataset.col = c;
                    gridContainer.appendChild(cell);
                }
            }
            
            renderGridItems();
            generateCode();
        }

        function renderGridItems() {
            gridContainer.querySelectorAll('.grid-item').forEach(item => item.remove());

            state.gridItems.forEach(item => {
                const itemEl = document.createElement('div');
                itemEl.classList.add('grid-item');
                itemEl.textContent = item.id;
                
                itemEl.style.gridColumn = `${item.colStart} / ${item.colEnd}`;
                itemEl.style.gridRow = `${item.rowStart} / ${item.rowEnd}`;
                
                gridContainer.appendChild(itemEl);
            });
        }

        function generateCode() {
            const { cols, rows, gap } = state.gridSettings;

            // Gera HTML
            let html = `&lt;div class="parent"&gt;\n`;
            state.gridItems.forEach(item => {
                html += `    &lt;div class="div${item.id}"&gt; ${item.id} &lt;/div&gt;\n`;
            });
            html += `&lt;/div&gt;`;
            // Usamos innerHTML para interpretar os &lt; e &gt;
            htmlCodeOutput.innerHTML = html;

            // Gera CSS
            let css = `.parent {\n`;
            css += `    display: grid;\n`;
            css += `    grid-template-columns: repeat(${cols}, 1fr);\n`;
            css += `    grid-template-rows: repeat(${rows}, 1fr);\n`;
            css += `    gap: ${gap}px;\n`;
            css += `}\n\n`;

            state.gridItems.forEach(item => {
                css += `.div${item.id} {\n`;
                // No vídeo, ele gera o "span", que é mais comum
                const colSpan = item.colEnd - item.colStart;
                const rowSpan = item.rowEnd - item.rowStart;
                css += `    grid-column: ${item.colStart} / span ${colSpan};\n`;
                css += `    grid-row: ${item.rowStart} / span ${rowSpan};\n`;
                css += `}\n\n`;
            });
            cssCodeOutput.textContent = css;
        }

        function handleReset() {
            state.gridItems = [];
            createGrid();
        }

        // --- 4. EVENT LISTENERS ---

        gridContainer.addEventListener('mousedown', (e) => {
            if (!e.target.classList.contains('grid-cell')) return;

            state.isMouseDown = true;
            const row = parseInt(e.target.dataset.row);
            const col = parseInt(e.target.dataset.col);
            state.selectionStart = { row, col };

            const selectionBox = document.createElement('div');
            selectionBox.classList.add('selection-box');
            selectionBox.style.gridColumn = `${col} / ${col + 1}`;
            selectionBox.style.gridRow = `${row} / ${row + 1}`;
            
            gridContainer.appendChild(selectionBox);
            state.selectionBox = selectionBox;
        });

        gridContainer.addEventListener('mousemove', (e) => {
            if (!state.isMouseDown || !e.target.classList.contains('grid-cell')) return;

            const currentRow = parseInt(e.target.dataset.row);
            const currentCol = parseInt(e.target.dataset.col);

            const start = state.selectionStart;
            const minRow = Math.min(start.row, currentRow);
            const maxRow = Math.max(start.row, currentRow);
            const minCol = Math.min(start.col, currentCol);
            const maxCol = Math.max(start.col, currentCol);

            state.selectionBox.style.gridColumn = `${minCol} / ${maxCol + 1}`;
            state.selectionBox.style.gridRow = `${minRow} / ${maxRow + 1}`;
        });

        // Soltar o mouse em qualquer lugar da página cancela a seleção
        document.addEventListener('mouseup', (e) => {
            if (!state.isMouseDown) return;

            state.isMouseDown = false;
            
            // Pega a posição final da caixa rosa
            const gridArea = {
                colStart: parseInt(state.selectionBox.style.gridColumnStart),
                colEnd: parseInt(state.selectionBox.style.gridColumnEnd),
                rowStart: parseInt(state.selectionBox.style.gridRowStart),
                rowEnd: parseInt(state.selectionBox.style.gridRowEnd)
            };

            // Adiciona o novo item
            state.gridItems.push({
                id: state.gridItems.length + 1,
                ...gridArea
            });

            state.selectionBox.remove();
            state.selectionBox = null;
            state.selectionStart = null;

            renderGridItems();
            generateCode();
        });

        // Listeners para os inputs
        columnsInput.addEventListener('change', createGrid);
        rowsInput.addEventListener('change', createGrid);
        gapInput.addEventListener('change', createGrid);
        resetButton.addEventListener('click', handleReset);

        // --- 5. INICIALIZAÇÃO ---
        createGrid();
    </script>

</body>
</html>
