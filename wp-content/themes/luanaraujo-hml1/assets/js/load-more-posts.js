jQuery(document).ready(function ($) {
	let isLoading = false;
	let currentOffset = 10; // Start after the first 10 posts (4 featured + 6 in grid)

	// Handle load more button click
	$(document).on("click", ".load-more", function (e) {
		e.preventDefault();

		if (isLoading) return;

		const button = $(this);
		const originalText = button.text();

		// Show loading state
		isLoading = true;
		button.text("Carregando...").prop("disabled", true);

		// Prepare data based on archive type
		const data = {
			action: "load_more_posts",
			nonce: load_more_ajax.nonce,
			offset: currentOffset,
		};

		// Add appropriate archive data
		if (button.data("category-id")) {
			data.category_id = button.data("category-id");
		} else if (button.data("tag-id")) {
			data.tag_id = button.data("tag-id");
		} else if (button.data("author-id")) {
			data.author_id = button.data("author-id");
		} else if (button.data("year")) {
			data.year = button.data("year");
			if (button.data("month")) data.month = button.data("month");
			if (button.data("day")) data.day = button.data("day");
		} else if (button.data("taxonomy") && button.data("term-id")) {
			data.taxonomy = button.data("taxonomy");
			data.term_id = button.data("term-id");
		} else if (button.data("search-query")) {
			data.search_query = button.data("search-query");
		}

		// Make AJAX request
		$.ajax({
			url: load_more_ajax.ajax_url,
			type: "POST",
			data: data,
			success: function (response) {
				if (response.success) {
					// Append new posts to the grid
					$(".post-list").append(response.html);

					// Update offset for next request
					currentOffset += 6;

					// Hide button if no more posts
					if (!response.has_more) {
						button.parent().fadeOut();
					}
				} else {
					console.error("Load more failed:", response.message);
					button.text("Erro ao carregar posts");
				}
			},
			error: function (xhr, status, error) {
				console.error("AJAX error:", error);
				button.text("Erro ao carregar posts");
			},
			complete: function () {
				isLoading = false;
				button.text(originalText).prop("disabled", false);
			},
		});
	});
});
