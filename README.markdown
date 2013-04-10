# This is the new LBRN site, generated with [Jekyll][1]


### Proper Development Workflow

#### Getting Set Up

1. Install [git][2] and [jekyll][3].
2. Clone this repository to your computer:

  `$ git clone git@github.com:lbrn/lbrn-jekyll.git`

3. Create and add a pubic SSH key so that you can easily deploy to Github:

  - `$ ssh-keygen -t rsa -C "your_email@example.com"` *(simply press enter until it finishes)*
  - Copy the contents of ~/.ssh/id_rsa.pub` and add the key [here][4]

3. Add the LBRN Server so that you can deploy:

  `$ git remote add server lbrn@test.lbrn.lsu.edu:~/lbrn-jekyll.git`

#### Editing The Site

- You can use `$ jekyll --server --auto` to see your changes on localhost:4000 while you develop. Press Ctrl+C to end.
- Edit the site using whatever editor you like. When you are satisfied with your change, add your changed files...

  `$ git add --all`

- Commit the changes and add a short message explaining what you changed...

  `$ git commit -m 'added a new news post`

- And publish your changes to Github and the server:

  - `$ git push origin`
  - `$ git push server`

- Your changes will instantly be reflected on http://test.lbrn.lsu.edu!


[1]: https://github.com/mojombo/jekyll#jekyll
[2]: http://git-scm.com/
[3]: https://github.com/mojombo/jekyll/wiki/install
[4]: https://github.com/settings/ssh