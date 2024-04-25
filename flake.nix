{
  description = "A Nix-flake-based Node.js development environment";

  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs/nixos-23.11";
  };

  outputs = { self, nixpkgs, ... }:
    let
      system = "x86_64-linux";
    in
    {
      devShells."${system}".default =
        let
          pkgs = import nixpkgs {
            inherit system;
          };
        in
        pkgs.mkShell {
          # create an environment with nodejs_18 and yarn
          packages = with pkgs; [
            php83
            php83Packages.composer
            # php83Extensions.mbstring
            # php83Extensions.pcov
            # php83Extensions.xdebug
            # phpunit
            fish
          ];

          shellHook = ''
            exec fish
          '';
        };
    };
}
