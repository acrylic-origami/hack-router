<?hh // strict
namespace Facebook\HackRouter;
interface IBaseRouter<+TResponder> {
  public function routeRequest(
    HttpMethod $method,
    string $path,
  ): (TResponder, ImmMap<string, string>);
  public function routePsr7Request(
    \Psr\Http\Message\RequestInterface $request,
  ): (TResponder, ImmMap<string, string>);
}