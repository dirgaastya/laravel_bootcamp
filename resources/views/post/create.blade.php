<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <div class="container py-3 ">
            <h1 class="fs-3">Tambah Post</h1>
           <form action="/post/create" method="post">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    placeholder="Masukan Judul"
                />
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Konten</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
           </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
