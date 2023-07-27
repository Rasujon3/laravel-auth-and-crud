<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class=" card border-0 shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <h5>All Questions</h5>
                    <a href="" class="btn btn-success">+ Create</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover" id="question_table">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th class="text-end pe-5">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    sure!! Would you like to delete?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="/js/datatables.min.css" />
<script type="text/javascript" src="/js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="/js/moment.min.js"></script>
<script type="text/javascript" src="/js/pdfmake.min.js"></script>
<script type="text/javascript" src="/js/vfs_fonts.js"></script>
<script type="text/javascript" src="/js/jszip.min.js"></script>
<script type="text/javascript" src="/js/datatables.min.js"></script>

<script>
    window.moment = moment;
            $(document).ready(function () {
                window.get_page = 1;
                let dTable = $('#question_table').DataTable({
                    processing: true,
                    serverSide: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'pageLength',
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: ':visible',
                            },
                        },
                        {
                            extend: 'copy',
                            exportOptions: {
                                columns: ':visible',
                            },
                        },
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: ':visible',
                            },
                        },
                        {
                            extend: 'pdf',
                            exportOptions: {
                                columns: ':visible',
                            },
                        },
                        'colvis',
                    ],
                    ajax: {
                        url: '/data',
                        data: function(d,e){
                            d.key = d.search.value||null;
                            d.paginate = d.length;
                            d.orderByColumn = d.columns[d.order[0].column].data;
                            d.orderBy = d.order[0].dir.toUpperCase();
                            return {
                                paginate: d.paginate,
                                page: window.get_page,
                                key: d.key,
                                orderBy: d.orderBy,
                                orderByColumn: d.orderByColumn,
                            }
                        },
                        dataFilter: function(data){
                            data = JSON.parse(data);
                            data.recordsTotal = data.total;
                            data.recordsFiltered = data.total;
                            // console.log(data);
                            return JSON.stringify( data );
                        }
                    },
                    "aoColumns": [
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'qty' },
                        {
                            mData: 'price',
                            mRender: function(data, type, row){
                                return data
                            }
                        },
                        // {
                        //     mData: 'created_at',
                        //     mRender: function(data){
                        //         return moment(data).format('d MMMM,YYYY hh:mm:ss')
                        //     }
                        // },
                        {
                            "mData": "id",
                            "mRender": function (data, type, row) {
                                // console.log(data, type, row);
                                return `
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-warning m-2" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger m-2" onclick="" href="">Delete</a>
                                    </div>
                                `;
                            }
                        }
                    ],
                });

                dTable.on( 'page.dt', function () {
                    window.get_page = dTable.page.info().page + 1;
                })
                .on('search.dt', function(){
                    window.get_page = 1;
                })
                .on('order.dt', function(){
                    window.get_page = 1;
                });
            });
</script>
