	<div class="hg_accordion_element style5">							 
							<div class="th-accordion">

								<a href="<?=base_url()?>create-excel-for-donations">Export Report Excel</a>


								<?php foreach ($admissions as $key => $admission) {  ?> 

									<div class="acc-group">
										<div id="heading<?= ++$key ?>">
											<a data-toggle="collapse" data-number="<?= $key ?>" data-target="#acc<?= $key ?>" class="collapsed" aria-expanded="false" aria-controls="acc1">
												<div class="row" style="font-weight: 700">
													<div class="col-md-3" style="font-size: 14px"> <?= $admission->tracking_id ?> </div>
													<div class="col-md-3"><?= str_replace('_',' ', $admission->billing_name)  ?></div>
													<div class="col-md-2"><?= $admission->order_status ?></div> 
											 &nbsp; <div class="col-md-3"><?= $admission->amount ?></div>
												</div> <span class="acc-icon"></span>
											</a>
										</div>

										<div id="acc<?= $key ?>" class="collapse" aria-labelledby="heading1" data-parent=".style5">
											<div class="content">
												<table width="100%">												 

													<tr>
														<th>Order Status : </th><td> <?= $admission->order_status ?></td>
														<th>Order ID</th><td> <a href="<?= base_url()?>InvoiceProcessing?invoice=<?=$admission->order_id?>" style="padding: 0px; position: static;"><?= $admission->order_id ?></a></td>
													</tr>

													<tr>
														<th>Applying Grade : </th><td> <?= $admission->applyingGrade ?></td>
														<th>A dmission Date</th><td> <?= $admission->admission_date ?></td>
													</tr>

													<tr>
														<th>Parent Name  : </th><td>
														<?= str_replace('_',' ', $admission->parentname)  ?> </td>
														<th>Mobile No</th><td> <?= $admission->billing_tel ?></td>
													</tr>

													<tr>
														<th>E-mail ID  : </th><td> <?= str_replace( '(a)','@',$admission->billing_email) ?></td>
														<th>Payment Date</th><td> <?= $admission->billing_tel ?></td>
													</tr>
													
													<tr>
														<th>Address  : </th><td colspan="2"> <?= str_replace('_',' ', $admission->billing_address) ?></td> 
													</tr>
													<tr>
														<th>Parents Query : </th><td  colspan="2"> 
															 <?= str_replace('_',' ', $admission->parentsQuery) ?> 
													</tr> 
												</table>
											</div>
										</div>
									</div>
								<?php } ?> 							
							</div> 
						</div> 