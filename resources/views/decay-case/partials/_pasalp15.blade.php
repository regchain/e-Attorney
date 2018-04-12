    <table class="table table-striped table-bordered">
      @forelse ($surat_pasal as $pasal)
      <tr>
        <td width="100%" colspan="4">
          <div>
            <div class="media-body">
              <strong class="media-heading">{{ $pasal->pasal_name }}</strong>
            </div>
            </div></div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>