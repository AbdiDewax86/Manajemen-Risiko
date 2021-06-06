<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Identifikasi Risiko Orang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th rowspan="3">Subklasifikasi</th>
                        <th rowspan="3">Tanggal</th>
                        <th rowspan="2" colspan="2">Dampak</th>
                        <th rowspan="2" colspan="2">Pengancam</th>
                        <th colspan="6">Identifikasi Risiko Bawaan</th>
                        <th rowspan="3">Kontrol</th>
                        <th colspan="6">Identifikasi Risiko Bawaan</th>
                        <th rowspan="2" colspan="3">Mitigasi</th>
                        <?php if ($this->session->user_logged->role != 'biasa'): ?>
                            <th rowspan="3">Kelola</th>
	                    <?php endif; ?>
                    </tr>
                    <tr>
                        <th colspan="2">Kerentanan</th>
                        <th colspan="2">Paparan</th>
                        <th rowspan="2">Jenis Risiko</th>
                        <th rowspan="2">Nilai Risiko</th>
                        <th colspan="2">Kerentanan</th>
                        <th colspan="2">Paparan</th>
                        <th rowspan="2">Jenis Risiko</th>
                        <th rowspan="2">Nilai Risiko</th>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Kontrol</th>
                        <th>PIC</th>
                        <th>Target</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($risiko as $risiko_s): ?>
				    <tr>
				    	<td>
				    		<?php echo $risiko_s->subklasifikasi ?>
				    	</td>
                        <td>
                            <?php echo $risiko_s->tanggal ?>
                        </td>
				    	<td class="small">
				    		<?php echo $risiko_s->dampak_keterangan ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->dampak_nilai ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->pengancam_keterangan ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->pengancam_nilai ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->bawaan_kerentanan_keterangan ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->bawaan_kerentanan_nilai ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->bawaan_paparan_keterangan ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->bawaan_paparan_nilai ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->bawaan_jenis_risiko ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->bawaan_nilai_risiko ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->kontrol_keterangan ?>
				    	</td width="250">
                        <td class="small">
                            <?php echo $risiko_s->sisa_kerentanan_keterangan ?>
                        </td width="250">
                        
                        <td>
                            <?php echo $risiko_s->sisa_kerentanan_nilai ?>
                        </td>
				    	<td class="small">
				    		<?php echo $risiko_s->sisa_paparan_keterangan ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->sisa_paparan_nilai ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->sisa_jenis_risiko ?>
				    	</td width="250">
				    	<td>
				    		<?php echo $risiko_s->sisa_nilai_risiko ?>
				    	</td>
				    	<td class="small">
				    		<?php echo $risiko_s->mitigasi_kontrol ?>
				    	</td width="250">
				    	<td class="small">
				    		<?php echo $risiko_s->mitigasi_pic ?>
				    	</td width="250">
				    	<td class="small">
				    		<?php echo $risiko_s->mitigasi_target ?>
				    	</td width="250">
                        <?php if ($this->session->user_logged->role != 'biasa'): ?>
                            <td>
						    	<a href="<?php echo site_url('admin/risiko/edit/'.$risiko_s->id) ?>"
						    	 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
						    	<a onclick="deleteConfirm('<?php echo site_url('admin/risiko/delete/'.$risiko_s->id) ?>')"
						    	 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
						    </td>
	                    <?php endif; ?>
				    </tr>
				    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>