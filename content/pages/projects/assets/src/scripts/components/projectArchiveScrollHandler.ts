const handleProjectArchiveScroll = () => {
	if (!window.matchMedia("(hover: none) and (pointer: coarse)").matches)
		return;

	const projectArchive = document.querySelector(".project-archive");
	const projects = projectArchive?.querySelectorAll(".project") || [];

	if ("IntersectionObserver" in window) {
		const projectArchiveObserver = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						const project = entry.target;

						projects.forEach((inactiveProject) => {
							inactiveProject.classList.remove("active");
						});

						project.classList.add("active");
					}
				});
			},
			{ rootMargin: "-35% 0px -65% 0px" }
		);

		projects.forEach((project) => {
			projectArchiveObserver.observe(project);
		});
	} else {
		projects.forEach((project) => {
			project.classList.add("active");
		});
	}
};

export default handleProjectArchiveScroll;
