export class ProjectArchiveFilter {
	toggle: HTMLAnchorElement | null;
	deactivator: HTMLAnchorElement | null;
	filterList: HTMLDivElement | null;
	filterLinks: NodeListOf<HTMLAnchorElement> | undefined;
	projectArchive: HTMLElement | null;
	projects: HTMLElement[];
	activeFilter: string | null = null;

	constructor() {
		this.toggle = document.querySelector(".filter-toggle");
		this.deactivator = document.querySelector(".projects-header h1");
		this.filterList = document.querySelector(".filter-list");
		this.filterLinks = this.filterList?.querySelectorAll(".filter-link");
		this.projectArchive = document.querySelector(".project-archive");
		this.projects = this.projectArchive
			? Array.from(this.projectArchive.querySelectorAll(".project"))
			: [];

		this.setClickHandlers();
	}

	private setClickHandlers() {
		this.toggle?.addEventListener("click", (e) => {
			e.preventDefault();

			if (this.filterList?.classList.contains("active")) {
				this.deactivateFilters();
			} else {
				this.toggle?.classList.add("active");
				this.filterList?.classList.add("active");
			}
		});

		this.deactivator?.addEventListener("click", (e) => {
			e.preventDefault();

			this.deactivateFilters();
		});

		this.filterLinks?.forEach((filterLink) => {
			filterLink.addEventListener("click", (e) => {
				e.preventDefault();

				const prevFilter = this.activeFilter;

				this.resetFilter();

				if (prevFilter === filterLink.innerHTML) {
					return;
				} else if (typeof filterLink.innerHTML === "string") {
					this.activeFilter = filterLink.innerHTML;

					filterLink.classList.add("active");
					filterLink.classList.add("highlight-circle");

					const filteredProjects: HTMLElement[] = [];
					this.projects.forEach((project) => {
						if (project.dataset.category === this.activeFilter) {
							filteredProjects.push(project);
						} else {
							project.classList.remove("hidden");
						}
					});

					filteredProjects.reverse().forEach((project) => {
						this.projectArchive?.prepend(project);
					});
				}
			});
		});
	}

	private resetFilter() {
		this.activeFilter = null;

		this.projects
			.sort((a, b) => Number(a.dataset.order) - Number(b.dataset.order))
			.forEach((project) => {
				this.projectArchive?.append(project);
			});

		this.filterLinks?.forEach((link) => {
			link.classList.remove("active");
			link.classList.remove("highlight-circle");
		});
	}

	private deactivateFilters() {
		this.resetFilter();

		this.toggle?.classList.remove("active");
		this.filterList?.classList.remove("active");
	}
}
