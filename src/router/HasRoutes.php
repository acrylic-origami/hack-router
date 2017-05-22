<?hh // strict
namespace Facebook\HackRouter;

interface HasRoutes<+TResponder> {
  public function getRoutes(
  ): ImmMap<HttpMethod, ImmMap<string, TResponder>>;
}