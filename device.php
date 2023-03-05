<!-- Header -->
<?php include "header.php"; ?>

<!-- Content -->
<div class="min-h-screen flex items-center justify-center px-4 mt-4 mb-8">
    <div class="max-w-5xl p-10 bg-white w-full material-card">
        <div class="d-name">
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 material-card bg-blue-50">
                <div class="device-image w-full center px-auto">
                </div>
                <div class="material-card bg-blue-50 flex-wrap items-center p-6 maintainer">
                    <div class="flex items-center py-2 justify-between space-x-2">
                        <div class="space-x-2 truncate">
                            <span class="font-medium">Maintained by:</span>
                        </div>
                        <span class="text-gray-500">Loading...</span>
                    </div>
                    <div class="flex items-center py-2 justify-between space-x-2">
                        <div class="space-x-2 truncate">
                            <span class="font-medium">Latest Version:</span>
                        </div>
                        <span class="text-gray-500">Loading...</span>
                    </div>
                    <div class="flex items-center py-2 justify-between space-x-2">
                        <div class="space-x-2 truncate">
                            <span class="font-medium">Last Updated on:</span>
                        </div>
                        <span class="text-gray-500">Loading...</span>
                    </div>
                    <div class="flex items-center pt-6 justify-between space-x-2 ml-auto">
                        <a target="_blank" href="${l}" class="filled-btn px-6 py-3 font-medium ml-auto">
                            <em class="fa fa-telegram mr-2" aria-hidden="true"></em>Telegram Group
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="vanilla mt-8" data-type="vanilla">
                <div class="flex-wrap p-2 material-card bg-blue-50 p-6 h-full">
                    <svg class="justify-center mx-auto my-4 w-10 h-10" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M 17.49 0.97 C 17.57 1.05 17.64 1.1 17.69 1.16 C 17.979 1.477 18.203 1.847 18.35 2.25 C 18.542 2.775 18.584 3.343 18.47 3.89 C 18.435 4.08 18.385 4.268 18.32 4.45 C 18.226 4.665 18.116 4.872 17.99 5.07 L 17.15 6.41 L 16.46 7.5 L 15.46 9.06 L 14.46 10.7 C 14.21 11.11 13.97 11.52 13.71 11.93 L 12.47 13.93 C 12.23 14.32 11.99 14.73 11.74 15.12 C 11.49 15.51 11.15 16.03 10.85 16.49 L 10.52 16.99 C 10.491 17.033 10.467 17.08 10.45 17.13 C 11.016 17.308 11.607 17.389 12.2 17.37 C 13.216 17.331 14.201 17.008 15.044 16.439 C 15.886 15.871 16.554 15.078 16.97 14.15 C 17.322 13.349 17.469 12.472 17.4 11.6 C 17.33 10.719 17.049 9.869 16.58 9.12 L 18.15 6.62 L 18.64 7.24 C 19.11 7.895 19.481 8.616 19.74 9.38 C 19.93 9.916 20.05 10.474 20.1 11.04 C 20.125 11.536 20.125 12.034 20.1 12.53 C 20.082 13.129 19.978 13.721 19.79 14.29 C 19.649 14.733 19.482 15.167 19.29 15.59 C 19.029 16.138 18.692 16.646 18.29 17.1 C 18.073 17.374 17.839 17.634 17.59 17.88 C 17.052 18.401 16.443 18.842 15.78 19.19 C 15.017 19.598 14.193 19.882 13.34 20.03 C 12.98 20.093 12.615 20.126 12.25 20.13 C 11.823 20.14 11.395 20.124 10.97 20.08 C 10.489 20.02 10.001 20.02 9.52 20.08 C 8.952 20.156 8.391 20.273 7.84 20.43 C 7.322 20.597 6.815 20.794 6.32 21.02 C 5.98 21.17 5.65 21.34 5.32 21.52 C 5.154 21.614 4.994 21.717 4.84 21.83 C 4.71 21.93 4.59 21.94 4.51 21.83 C 4.477 21.791 4.46 21.741 4.46 21.69 C 4.46 21.639 4.477 21.589 4.51 21.55 L 5.41 20.12 L 6.41 18.59 C 6.73 18.1 7.04 17.59 7.35 17.12 L 8.02 15.97 C 8.29 15.54 8.57 15.11 8.84 14.67 C 9.22 14.07 9.6 13.46 9.97 12.85 L 11.63 10.22 C 11.92 9.76 12.23 9.31 12.52 8.84 L 13.41 7.42 C 13.61 7.1 13.83 6.79 14.03 6.48 L 14.66 5.48 L 15.51 4.16 L 16.02 3.33 L 16.53 2.52 C 16.72 2.22 16.91 1.93 17.09 1.63 Z M 7.51 15.02 L 5.97 17.48 C 5.175 16.625 4.586 15.598 4.25 14.48 C 3.909 13.473 3.774 12.408 3.853 11.348 C 3.932 10.288 4.224 9.255 4.71 8.31 C 5.562 6.589 6.999 5.225 8.762 4.463 C 10.525 3.702 12.503 3.591 14.34 4.15 L 12.78 6.64 C 11.747 6.484 10.69 6.638 9.744 7.081 C 8.797 7.524 8.002 8.237 7.46 9.13 C 6.884 10.006 6.58 11.034 6.589 12.083 C 6.598 13.131 6.919 14.154 7.51 15.02 Z" fill="#1a73e8" stroke="#1a73e8" stroke-width="0"></path>
                    </svg>
                    <span class="flex text-xl font-medium justify-center mb-2">Vanilla</span>
                    <span class="flex text-gray-500 justify-center mb-12">Havoc-OS + AOSP Apps</span>
                    <span class="flex font-medium justify-center">Loading...</span>
                </div>
            </div>
            <div class="gapps mt-8" data-type="gapps">
                <div class="flex-wrap p-2 material-card bg-blue-50 p-6 h-full">
                    <svg class="justify-center mx-auto mb-4 w-10 h-10 p-1" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                            <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z" />
                            <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z" />
                            <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z" />
                            <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z" />
                        </g>
                    </svg>
                    <span class="flex text-xl font-medium justify-center mb-2">GApps</span>
                    <span class="flex text-gray-500 justify-center mb-8">Havoc-OS + Google Apps</span>
                    <span class="flex font-medium justify-center">Unavailable</span>
                </div>
            </div>
            <div class="link mt-8">
                <div class="flex-wrap p-2 material-card bg-blue-50 p-6 h-full">
                    <div class="flex-wrap justify-between">
                        <svg class="justify-center mx-auto my-4 w-10 h-10" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#6b7280">
                            <path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM5 19V8h14v11H5zm8.45-9h-2.9v3H8l4 4 4-4h-2.55z" />
                        </svg>
                        <span class="flex text-xl font-medium justify-center mb-2">Archived Builds</span>
                        <span class="flex text-gray-500 justify-center mb-12">Havoc-OS</span>
                        <div class="flex justify-center mt-10">
                            <span class="flex font-medium justify-center">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="changelog">
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>
<script src="src/js/back_to_top.js"></script>
<script src="src/js/device.js"></script>

<!-- Footer -->
<?php include "footer.php"; ?>
