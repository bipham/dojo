<template>
    <div>
        <table id="example" class="display" cellspacing="0" width="100%" :dataTable="dataTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category_ID</th>
                <th>Name</th>
                <th>Description.</th>
                <th>Price</th>
                <th>Sale_price</th>
                <th>Stock</th>
                <th>Img</th>
                <th>Obj</th>
                <th>is_published</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Category_ID</th>
                <th>Name</th>
                <th>Description.</th>
                <th>Price</th>
                <th>Sale_price</th>
                <th>Stock</th>
                <th>Img</th>
                <th>Obj</th>
                <th>is_published</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['dataTable'],
        methods: {
            setUpDataTable(dataAjax) {
                $('#example').DataTable( {
                    data: dataAjax,
                    columns: [
                        { data: 'id' },
                        { data: 'category_id' },
                        { data: 'name' },
                        { data: 'description' },
                        { data: 'price' },
                        { data: 'sale_price' },
                        { data: 'stock' },
                        { data: 'image_feature' },
                        { data: 'object' },
                        { data: 'is_published' },
                        { data: 'created_at' },
                        { data: 'updated_at' }
                    ]
                 } );
            }
        },
        mounted() {
            this.setUpDataTable(this.dataTable)
        },
        updated() {
            this.setUpDataTable(this.dataTable)
        }
    }
</script>
