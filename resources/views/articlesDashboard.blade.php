@extends('layout.dashboard_layout')

@section('main')
<div class="d-flex justify-content-between text-center mb-3 ">
    <h1>Administrar Artículos</h1>

    <!-- Button show modal create new article- -->
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalCreateArticle">
        Crear nuevo artículo
    </button>
    <!-- Modal - create new article-->
    <div class="modal fade" id="modalCreateArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo artículo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario -->
                    <form action="{{ route('articles') }}" method="POST" name="formCreateArticle" id="formCreateArticle" class="bg-light p-4 formContact">
                        @csrf
                        <div class="form-row row">

                            <!-- Input: Title -->
                            <div class="form-group col-md-6">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Titulo del artículo">
                            </div>
                            <!-- Input: Url -->
                            <div class="form-group col-md-6">
                                <label for="url">Url</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Link de acceso">

                            </div>
                        </div>
                        <!-- Input: Url Image -->
                        <div class="form-group">
                            <label for="urlToImage">Url Imagen</label>
                            <input type="text" name="urlToImage" class="form-control" id="urlToImage" placeholder="URL Imagen">
                        </div>

                        <!-- Input: Category -->
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select class="form-control" name="category" id="category">
                                <option value="" selected>-- Selecciona una opción --</option>
                                <option>General</option>
                                <option>Negocios</option>
                                <option>Deportes</option>
                                <option>Ciencias</option>
                                <option>Salud</option>
                                <option>Anuncios</option>
                                <option>Entretenimiento</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button id="closeBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button id="submitBtn" type="submit" class="btn btn-success">Guardar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div><!-- End modal  create new article--->
</div>

<!-- Modal edit article -->
<div class="modal fade" id="modalEditArticle" tabindex="-1" role="dialog" aria-labelledby="modalEditArticleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditArticleLabel">Editar artículo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditArticle" action="" method="POST">
                    @csrf
                    <input type="hidden" name="article_id" id="editArticleId" value="">
                    <div class="form-group">
                        <label for="editTitle">Título</label>
                        <input type="text" name="title" class="form-control" id="editTitle" placeholder="Título del artículo">
                    </div>
                    <div class="form-group">
                        <label for="editUrl">Url</label>
                        <input type="text" name="url" class="form-control" id="editUrl" placeholder="Link de acceso">
                    </div>
                    <div class="form-group">
                        <label for="editUrlToImage">Url Imagen</label>
                        <input type="text" name="urlToImage" class="form-control" id="editUrlToImage" placeholder="URL Imagen">
                    </div>
                    <div class="form-group">
                        <label for="editCategory">Categoría</label>
                        <select class="form-control" name="category" id="editCategory">
                            <option value="">-- Selecciona una opción --</option>
                            <option value="actual">Actualidad</option>
                            <option value="negocios">Negocios</option>
                            <option value="deportes">Deportes</option>
                            <option value="ciencia">Ciencias</option>
                            <option value="salud">Salud</option>
                            <option value="anuncios">Anuncios</option>
                            <option value="entretenimiento">Entretenimiento</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal edit article -->

<!-- Table -->
<table class="table table-striped table-bordered border-active">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Link</th>
            <th scope="col">Imagen</th>
            <th scope="col">Categoria</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td><a href="{{ $article->url }}" target="_blank">Link</a></td>
            <td><a href="{{ $article->urlToImage }}" target="_blank">Imagen</a></td>
            <td>{{ $article->category }}</td>
            <td>
                <button type="button" class="edit-article-btn btn-primary border border-0 rounded-circle bg-transparent" data-article-id="{{ $article->id }}" data-article-title="{{ $article->title }}" data-article-url="{{ $article->url }}" data-article-url-to-image="{{ $article->urlToImage }}" data-article-category="{{ $article->category }}">
                    <img src="sources/images/icon_edit.png" style="width:30px" alt="Editar usuario">
                </button>

                <form action="{{ route('delete.article') }}" method="POST">
                    @csrf <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <button type="submit" class="border border-0 rounded-circle bg-transparent " onclick="return confirm('¿Está seguro de querer eliminar este artículo?')">
                        <img src="sources/images/icon_delete.png" style="width:25px" alt="Eliminar usuario">
                    </button>
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</table>

@endsection

<script src="{{ asset('js/dashboard.js') }}" defer></script>