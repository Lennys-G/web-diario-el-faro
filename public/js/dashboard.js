document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelectorAll("button.edit-article-btn")
        .forEach(function (button) {
            button.addEventListener("click", function (event) {
                event.preventDefault();

                let articleId = this.getAttribute("data-article-id");
                let articleTitle = this.getAttribute("data-article-title");
                let articleUrl = this.getAttribute("data-article-url");
                let articleUrlToImage = this.getAttribute(
                    "data-article-url-to-image"
                );
                let articleCategory = this.getAttribute(
                    "data-article-category"
                );

                console.log(
                    articleId,
                    articleTitle,
                    articleUrl,
                    articleUrlToImage,
                    articleCategory
                );

                document.getElementById("editArticleId").value = articleId;
                document.getElementById("editTitle").value = articleTitle;
                document.getElementById("editUrl").value = articleUrl;
                document.getElementById("editUrlToImage").value =
                    articleUrlToImage;

                let categorySelect = document.getElementById("editCategory");
                let optionToSelect = categorySelect.querySelector(
                    'option[value="' + articleCategory + '"]'
                );
                if (optionToSelect) {
                    optionToSelect.selected = true;
                }
                document.getElementById("formEditArticle").action =
                    "/article/update/" + articleId;

                let modal = new bootstrap.Modal(
                    document.getElementById("modalEditArticle")
                );
                modal.show();
            });
        });
});
