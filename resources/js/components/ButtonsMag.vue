<template>
	<div class="">
		<a :href="'/office/magasins/edit/' + magasin" class="btn btn-primary">modifier</a>
		<button
			type="button"
			@click="islinked"
			class="btn btn-danger"
			data-toggle="modal"
			data-target="#modal-notification"
		>
			supprimer
		</button>
		<div
			class="modal fade"
			id="modal-notification"
			tabindex="-1"
			role="dialog"
			aria-labelledby="modal-notification"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered modal-" :class="variant.first" role="document">
				<div class="modal-content" :class="variant.second">
					<div class="modal-header">
						<h6 class="modal-title" id="modal-title-notification">
							Gardez l'oeil ouvert
						</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>

					<div class="modal-body">
						<div class="py-3 text-center">
							<i class="ni ni-bell-55 ni-3x"></i>
							<h4 class="heading mt-4">
								A lire attentivement !!
							</h4>
							<p>
								{{ message }}
							</p>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-white">
							confirmer
						</button>
						<button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">
							abandonner
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		magasin: Number,
	},
	data() {
		return {
			variant: {
				first: { "modal-primary": true },
				second: { "bg-gradient-primary": true },
			},
			message: `la suppression de ce magasin est sans danger car aucun produit associé n'as été trouvé.
                      l'utilisateur relié à ce compte magasin sera néanmoins supprimé.`,
		}
	},
	methods: {
		islinked() {
			axios
				.get("/api/magasin/liaisons/" + this.magasin)
				.then(result => {})
				.catch(err => {})
			// this.message = `la suppression de ce magasin implique celle des produits qui s'y trouvent.Voulez vous
			//                 réelement supprimer ce magasin ?. Cette action est irréversible.`;
			// this.variant.first = "modal-danger";
			// this.variant.second = "bg-gradient-danger";
		},
	},
}
</script>

<style scoped></style>
