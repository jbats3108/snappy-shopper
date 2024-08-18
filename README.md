## Jamie Batabyal's Code Task

I thought I'd use the Readme to add context or explanations to some of the choices I've made in this app.

#### No Auth
None of the routes I've defined have any middleware or auth checks -> this was done for speed,
as implementing an authentication/authorization system felt out of scope.
Also, in a larger scale app, I would expect access controls to be tested separately, so adding this into the test
classes
would also have been unnecessary.

#### Two ways to handle Postcode imports
The Postcode import process went through a few iterations, but I decided to leave both the import by API command
and the import from CSV command, as firstly I felt like there would be a valid use case for both in a Production app -
the API command for handling ad-hoc additions, and the CSV import for an initial loading / adding large numbers of new
data,
and secondly, I wanted to demonstrate different approaches and techniques.

#### Postcode incode/outcode fields
While these fields are not actually used by any of the features I've written, I could foresee a use for these in an app
of this sort, so kept them in.

#### Mixed validation approaches for request parameters
I tend to prefer using the Laravel Data package for handling POST request validation, or GET query validation where
there are multiple fields that require rules. For singular route parameters, using the Route Model Binding feels like
a less over-engineered approach.

#### Seeded Data
I've seeded a lot more data than is actually used in the tests - when I started the seeding I wasn't sure how it was
going to be used, and it felt better to keep it than remove the seeds.

#### Missing edge cases in tests
I haven't covered every single edge case I could think of when testing my APIs and commands, in the interest of speed
and simplicity. 
