<div class="modal interface animated bounceIn" id="Interface">
	<div class="modal-dialog modal-lg">
		<div class="clearfix">
			<button type="button" class="close pull-right text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'admin', 'action' => 'home', 'prefix' => 'admin']) ?>">
						<div class="element padded">
							<i class="fa fa fa-dashboard fa-4x"></i>
							<h5><?= __d('admin', 'Dashboard') ?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'articles', 'action' => 'index', 'prefix' => 'admin']) ?>">
						<div class="element padded">
							<i class="fa fa fa-newspaper-o fa-4x"></i>
							<h5><?= __d('admin', 'Articles') ?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'categories', 'action' => 'index', 'prefix' => 'admin']);?>">
						<div class="element padded">
							<i class="fa fa fa-tag fa-4x"></i>
							<h5><?= __d('admin', 'Categories') ?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'attachments', 'action' => 'index', 'prefix' => 'admin']);?>">
						<div class="element padded">
							<i class="fa fa-file-archive-o fa-4x"></i>
							<h5><?= __d('admin', 'Attachments') ?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index', 'prefix' => 'admin']);?>">
						<div class="element padded">
							<i class="fa fa fa-users fa-4x"></i>
							<h5><?= __d('admin', 'Users') ?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'premium', 'action' => 'home', 'prefix' => 'admin/premium']);?>">
						<div class="element padded">
							<i class="fa fa-trophy fa-4x"></i>
							<h5><?= __d('admin', 'Premium') ?></h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
