## This is the source for the new LBRN site, generated with [Jekyll][1]



#### Getting Set Up

1. Install [git][2] and [jekyll][3].
2. Clone this repository to your computer:
    ``` bash
    $ git clone git@github.com:lbrn/lbrn-jekyll.git
    ```

3. Create and add a pubic SSH key so that you can easily deploy to Github:
    ```bash
    $ ssh-keygen -t rsa -C "your_email@example.com"
    ```
  Simply press enter until it finishes, and then copy the contents of `~/.ssh/id_rsa.pub` and add the key [here][4].

3. Add the LBRN Server so that you can deploy:
    ```bash
    $ git remote add server lbrn@test.lbrn.lsu.edu:~/lbrn-jekyll.git
    ```

#### Editing The Site

1. You can use `$ jekyll serve` to see your changes on [localhost:4000](http://localhost:4000) while you develop. Press `ctrl+c` to end.
2. Edit the site using whatever editor you like. When you are satisfied with your change, add your changed files..
    ```bash
    $ git add --all
    ```

3. Commit the changes and add a short message explaining what you changed...
    ```bash
    $ git commit -m "added a new news post"
    ```

4. And publish your changes to Github and the server:
    ```bash
    $ git push origin
    $ git push server
    ```

5. Your changes will instantly be reflected on http://test.lbrn.lsu.edu!


#### Why Use Git?

Here are some examples of why using Git+Github is so useful:

- `$ git log` will show a list of every change that has been made to the code from the very beginning, and who authored the change.
- `$ git reset --hard [commit]` will completely change the directory to the state it was in after [commit]. Basically, we can rollback to any point in the project's history at any time.
- `$ git pull` will downlaod all the latest changes from Github and merge them into your current code. This allows everybody to always have the most up-to-date code for the site.
- `$ git revert [commit]` will reverse any changes brought in with a certain commit. In this way, if somebody pushes something to the server that was bad, undoing that change is very easy.
- This is only the surface of what you can do with Git.

[1]: http://jekyllrb.com/
[2]: http://git-scm.com/
[3]: https://github.com/mojombo/jekyll/wiki/install
[4]: https://github.com/settings/ssh
