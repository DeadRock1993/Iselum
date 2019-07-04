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

for (let i = 0; i < backgroundArr.length; i++) {
	themeBlocks[i].style.backgroundImage = backgroundArr[i];
}
