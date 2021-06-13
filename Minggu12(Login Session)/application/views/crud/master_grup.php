<?php 
    $getUser = $this->session->userdata('session_user');
    $getGrup = $this->session->userdata('session_grup');
 ?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
	</div>
		<div class="card-body">
			<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php 
						$no = 1;
						foreach($admin as $baris) : 
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->grup; ?></td>
						<td class="text-center">
							<?php if ($getGrup==1) { ?>
								<a href="<?php echo base_url('Grup/edit_grup/'.$baris->id_grup);?>" class="fa fa-edit mr-4"> 							
								<a href="<?php echo base_url('Grup/hapus_grup/'.$baris->id_grup);?>" class="fa fa-times">
							<?php } ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<a href="<?= base_url('Grup/tambah_grup'); ?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>
	</div>
</div>
