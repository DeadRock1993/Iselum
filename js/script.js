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
