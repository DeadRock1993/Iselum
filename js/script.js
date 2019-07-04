$(document).ready(function() {
	let quote, author;

	(function getQuotes() {
		$.ajax({
			url: 'https://api.forismatic.com/api/1.0/',
			jsonp: 'jsonp',
			dataType: 'jsonp',
			data: {
				method: 'getQuote',
				format: 'jsonp',
				lang: 'ru'
			},
			success: function(response) {
				quote = response.quoteText;
				author = response.quoteAuthor;
				$('#quotes').text(quote);
				if (author) {
					$('#author').text(author);
				} else {
					$('#author').text('-Автор неизвестен');
				}
			}
		});
	})();
});

//not quote stuff
let themeBlocks = document.getElementsByClassName('inner-block-1');
let backgroundArr = [
	'url("https://demo2.lafeum.org/wp-content/uploads/2017/11/209-712x445.jpg")',
	'url("https://demo2.lafeum.org/wp-content/uploads/2017/09/28-712x445.jpg")',
	'url("https://demo2.lafeum.org/wp-content/uploads/2017/09/133-712x445.jpg")',
	'url("https://demo2.lafeum.org/wp-content/uploads/2018/11/325-712x445.jpg")',
	'url("https://demo2.lafeum.org/wp-content/uploads/2018/11/327-712x445.jpg")',
	'url("https://demo2.lafeum.org/wp-content/uploads/2017/11/304-712x445.jpg")'
];
let len;
if (backgroundArr.length < themeBlocks.length) {
	len = backgroundArr.length;
} else {
	len = themeBlocks.length;
}
for (let i = 0; i < len; i++) {
	themeBlocks[i].style.backgroundImage = backgroundArr[i];
}

/// searcher
let switchSearch = document.getElementById('switch-search');
let ABCtoSearch = document.getElementById('fromABC');
let dictSearch = document.getElementById('dict-search');
let ABC = document.getElementById('abc');
let found = false;
switchSearch.addEventListener('click', showSearch);
ABCtoSearch.addEventListener('click', showABC);

function showSearch() {
	ABC.style.display = 'none';
	dictSearch.style.display = 'block';
}

function showABC() {
	dictSearch.style.display = 'none';
	ABC.style.display = 'block';
}

let searchInput = document.getElementById('search-cat');
let textFromBlocks = document.getElementsByClassName('post-txt');
searchInput.addEventListener('keyup', function(item) {
	let term = item.target.value.toLowerCase();
	for (let i = 0; i < textFromBlocks.length; i++) {
		let ourBlock = textFromBlocks[i];
		let txtToCheck = ourBlock.textContent;
		txtToCheck = txtToCheck.toLowerCase();
		if (txtToCheck.indexOf(term) != -1) {
			ourBlock.style.display = 'block';
			found = true;
		} else {
			ourBlock.style.display = 'none';
		}
	}
	notFndMsg(found);
});

let notFoundMsg = document.getElementById('notFoundMsg');
let letters = document.getElementsByClassName('ABC');
Array.from(letters).forEach((i) => i.addEventListener('click', fil));
function fil() {
	letter = this.textContent;
	for (let i = 0; i < textFromBlocks.length; i++) {
		let blocks = textFromBlocks[i];
		let text = blocks.textContent;
		text = text.trim().toLowerCase();
		console.log(text[0]);
		if (text[0] === letter) {
			blocks.style.display = 'block';
			found = true;
		} else {
			blocks.style.display = 'none';
		}
	}
	notFndMsg(found);
}
function notFndMsg(boolen) {
	if (boolen) {
		notFoundMsg.style.display = 'none';
	} else {
		notFoundMsg.style.display = 'block';
	}
	found = false;
}
