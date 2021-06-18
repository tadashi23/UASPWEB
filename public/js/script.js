$(function(){
    $('.tampilModalUbah').on('click', function(){

    const id = $(this).data('id');
    $.ajax({
        url: 'https://localhost/ilkomstudy/public/manage/getdatabuku',
        data: {id : id},
        method: 'POST',
        dataType: 'json',
        success: function(data){
            $('#ubahJudul').val(data.judul);
            $('#ubahKategori').val(data.kategori);
            $('#ubahPenulis').val(data.penulis);
            $('#ubahTahun').val(data.tahun);
            $('#ubahSummary').val(data.summary);
            $('#ubahLink').val(data.link);
            $('#id').val(data.judul);
        }
    })

    });
});