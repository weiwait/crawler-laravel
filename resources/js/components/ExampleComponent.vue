<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Fiction crawler</div>

                    <div class="card-body">
                        <form action="/crawling" method="post">
                            <div class="form-group">
                                <label for="input-url"></label>
                                <input type="text" id="input-url" class="form-control" placeholder="章节地址" name="url">
                            </div>
                            <div class="form-group">
                                <label for="input-name"></label>
                                <input type="text" id="input-name" class="form-control" placeholder="名称" name="name">
                            </div>
                            <button type="submit" class="btn btn-danger">Crawling</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
