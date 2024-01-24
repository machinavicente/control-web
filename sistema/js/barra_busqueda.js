document.addEventListener('DOMContentLoaded', (event) => {
	document.getElementById('buscar').addEventListener('keyup', e => {
		document.querySelectorAll('.celda').forEach(item => {
			if (item.textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
				item.classList.remove('filtro');
			} else {
				item.classList.add('filtro');
			}
		});
	});
});